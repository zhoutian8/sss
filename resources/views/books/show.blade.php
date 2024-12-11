@extends('layouts.app')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; text-align: center; border: 1px solid #ccc; border-radius: 10px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 24px; margin-bottom: 20px;">{{ $book->title }}</h1>
        <p style="font-size: 18px; color: #555;">Author: {{ $book->author }}</p>
        <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}" style="width: 300px; height: auto; margin: 20px 0;">
        <p style="font-size: 16px; color: #333; line-height: 1.5;">{{ $book->excerpt }}</p>
        <a href="{{ url('/') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Back to list</a>
    </div>

    <!-- 评论区域 -->
    <div style="max-width: 600px; margin: 40px auto; text-align: center;">
        <h2 style="font-size: 20px; margin-bottom: 20px;">Comments</h2>

        <!-- 评论输入框 -->
        <form action="{{ route('comments.store', $book->id) }}" method="POST" style="margin-bottom: 20px;">
            @csrf
            <textarea name="comment" rows="4" placeholder="Write your comment here..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
            <button type="submit" style="margin-top: 10px; padding: 10px 20px; background-color: #28a745; color: #fff; border: none; border-radius: 5px;">Submit</button>
        </form>

        <!-- 显示评论 -->
        @foreach($book->comments as $comment)
            <div style="margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; text-align: left;">
                <p style="margin: 0; color: #555;">{{ $comment->comment }}</p>
                <small style="color: #aaa;">Posted on {{ $comment->created_at }}</small>
            </div>
        @endforeach
    </div>
@endsection
