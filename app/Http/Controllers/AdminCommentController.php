<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class AdminCommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all(); 
       
        return view('admin.comments.index', compact('comments'));
    }

    public function delete($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('admin.comments.index')->with('success', '评论已删除');
    }
}
