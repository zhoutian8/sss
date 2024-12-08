@extends('magic.admin')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Edit Book</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $book->name }}" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="4" required>{{ $book->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Book Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    @if($book->image)
                        <img src="{{ asset('storage/' . $book->image) }}" width="100" height="100">
                    @endif
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
