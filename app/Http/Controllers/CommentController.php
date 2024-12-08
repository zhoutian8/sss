<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function userComments()
    {
        // 获取当前登录用户的所有评论
        $comments = Comment::where('user_id', auth()->id())->get();
        
        return view('comments.index', compact('comments'));
    }

    public function delete($id)
    {
        // 找到评论并删除
        $comment = Comment::find($id);

        if ($comment && $comment->user_id == auth()->id()) {
            $comment->delete();
            return redirect()->route('comments.index')->with('success', 'Comment deleted successfully.');
        }

        return redirect()->route('comments.index')->with('error', 'You cannot delete this comment.');
    }
}