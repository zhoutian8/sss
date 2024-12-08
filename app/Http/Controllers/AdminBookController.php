<?php

namespace App\Http\Controllers;

use App\Models\Book;  // 引入Book模型
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    // 显示书籍列表
    public function index()
    {
        $books = Book::all(); // 获取所有书籍
        return view('admin.books.index', compact('books'));
    }

    // 显示创建书籍页面
    public function create()
    {
        return view('admin.books.create');
    }

    // 存储新书籍
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $book = new Book;
        $book->name = $request->name;
        $book->content = $request->content;

        if ($request->hasFile('image')) {
            $book->image = $request->file('image')->store('images', 'public');
        }

        $book->save();

        return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
    }

    // 显示编辑书籍页面
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.books.edit', compact('book'));
    }

    // 更新书籍信息
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->content = $request->content;

        if ($request->hasFile('image')) {
            $book->image = $request->file('image')->store('images', 'public');
        }

        $book->save();

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    // 删除书籍
    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->comments()->delete();
        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }
}
