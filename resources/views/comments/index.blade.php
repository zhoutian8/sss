@extends('magic.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="blog-single-items">
        <div class="col-lg-8">
        <div class="comment-form pt-50">
        <div class="comment-title mb-40">
            <h3>Your Comments</h3>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="comment-list"  style='diplay:flex;width:500px;'>
                <ul>
                    @foreach ($comments as $comment)
                        <li>
                            <div class="col-lg-12">
                                <p>{{ $comment->content }}  <small>Posted on {{ $comment->created_at->diffForHumans() }}</small></p>
                               

                                <!-- 删除评论按钮 -->
                                <form action="{{ route('comments.delete', $comment->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
