@extends('magic.app')

@section('content')
<div class="blog-section style-two details">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="blog-single-items">
						<div class="blog-thumb">
                        @if ($book->image)
                        <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->name }}">
                        @endif
						</div>
						<div class="blog-content">
							<div class="blog-content-text text-left">
								<h5>{{ $book->name }}</h5>
								<p>{{ $book->content }}</p>
								
								
								

							</div>
						</div>
						@if (auth()->check())
                            <!-- 登录用户可以评论 -->
                            <div class="comment-form pt-50">
                                <div class="comment-title mb-40">
                                    <h3>Comments</h3>
                                    <ul>
                                        @foreach ($book->comments as $comment)
                                            <li>
                                                {{ $comment->content }} 
                                                <small>by <b>{{ $comment->user->username }}</b> on {{ $comment->created_at->diffForHumans() }}</small>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <form action="{{ route('books.comments.store', $book->id) }}" method="POST">
                                    @csrf
                                    <textarea name="content" class="mb-20" id="comment-msg-box" cols="30" rows="4" placeholder="Message"></textarea>
                                    <input type="submit" value="Post Comment" class="submit-comment">
                                </form>
                            </div>
                        @else
                            <!-- 未登录用户 -->
                            <p>Please <a href="{{ route('login.create') }}">login</a> to leave a comment.</p>
                        @endif
					</div>
				</div>
				
			</div>
		</div>
	</div>
    @endsection