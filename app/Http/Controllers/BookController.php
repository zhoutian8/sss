<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Comment;

class BookController extends Controller
{
    public function index()
    {
        // 获取所有书籍记录
        $books = Book::all();

        // 返回视图并传递数据
        return view('books.index', compact('books'));
    }

    public function detail($id)
    {
        $book = Book::findOrFail($id); // 查找对应的书籍，如果找不到会抛出 404 错误
        return view('books.detail', compact('book')); // 返回详情页视图
    }

    public function storeComment(Request $request, $id)
    {
        // 如果用户未登录，则重定向到登录页面
        if (!auth()->check()) {
            return redirect()->route('login.create')->with('error', 'Please log in to leave a comment.');
        }
    
        $request->validate([
            'content' => 'required|max:500',
        ]);
    
        // 创建评论
        Comment::create([
            'user_id' => auth()->id(),
            'book_id' => $id,
            'content' => $request->content,
        ]);
    
        return redirect()->route('books.detail', $id)->with('success', 'Your comment has been posted.');
    }
}
