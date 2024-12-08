@extends('magic.admin') 

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Admins</strong>
            <a href="{{route('admin.create')}}" class="btn btn-primary btn-sm float-right">Add</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                    <tr>
                        <th scope="row">{{ $admin->id }}</th>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('admin.delete', $admin->id) }}" method="POST" style="display:inline;">
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
