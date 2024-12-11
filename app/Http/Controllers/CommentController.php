<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Book; 
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $bookId)
    {
        // 验证评论内容
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        // 查找对应的书籍
        $book = Book::findOrFail($bookId); // 如果未找到书籍会自动抛出 404 错误

        // 创建评论
        Comment::create([
            'book_id' => $book->id,
            'user_id' => auth()->id(), // 获取当前登录用户的 ID
            'comment' => $request->input('comment'),
        ]);

        // 重定向并提示成功信息
        return redirect()->route('books.show', $book->id)->with('success', 'Comment posted successfully!');
    }
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('user_id')->default(0)->change(); // 默认值为 0
        });
    }
    public function destroy(Comment $comment)
    {
        // 确保评论属于当前用户
        if ($comment->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $comment->delete();

        return redirect()->route('profile')->with('success', 'Comment deleted successfully.');
    }
    public function show($id)
    {
        $book = Book::with('comments')->findOrFail($id);
        return view('books.show', compact('book'));
    }
    public function profile()
    {
        $user = auth()->user();
        $comments = Comment::where('user_id', $user->id)->get();

        return view('user.profile', compact('user', 'comments'));
    }



}

