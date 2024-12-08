@extends('magic.app')

@section('content')
<div class="blog-section style-two details">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="row">
                    @foreach($books as $book)
						<div class="col-lg-12">
							<div class="blog-single-items">
								<div class="blog-thumb" style='text-align:center;'>
                                @if($book->image)
                                    <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->name }}" style="width:45%;">
                               
                                @endif
								</div>
								<div class="blog-content">
									<div class="blog-content-text text-left">
                                    <a href="{{ route('books.detail', $book->id) }}"><h5>{{ $book->name }}</h5></a>
										
									</div>
								</div>
							</div>
						</div>
						
                        @endforeach	
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
    @endsection