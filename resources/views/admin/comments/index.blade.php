@extends('magic.admin') 

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Comments</strong>
           
        </div>
        <div class="card-body">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">BookName</th>
                        <th scope="col">Content</th>
                        <th scope="col">UserName</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    
                    <tr>
                        <th scope="row">{{ $comment->id }}</th>
                        <td>{{ $comment->book->name }}</td>
                        <td>{{ $comment->content }}</td>
                        <td>{{ $comment->user->username }}</td>
                        <td> <form action="{{ route('admin.comments.delete', $comment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
