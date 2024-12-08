@extends('magic.admin')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Books</strong>
            <a href="{{ route('admin.books.create') }}" class="btn btn-primary btn-sm float-right">Add Book</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Content</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->name }}</td>
                        <td>{{ Str::limit($book->content, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('admin.books.delete', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
