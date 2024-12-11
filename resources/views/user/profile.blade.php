@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="text-center">Personal Center</h1>

    <!-- 用户信息 -->
    <div class="text-center mb-10">
        <h3>Welcome, {{ $user->name }}!</h3>
        <div class="profile-picture-container" style="position: relative; display: inline-block;">
            @if ($user->profile_picture)
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 2px solid #007bff;">
            @else
                <img src="{{ asset('default-profile.png') }}" alt="Default Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 2px solid #ccc;">
            @endif
        </div>
    </div>

    <!-- 编辑个人信息表单 -->
    <div class="card mb-30">
        <div class="card-header text-center">Edit Profile</div>
        <div class="card-body">
            @if (session('profile_success'))
                <div class="alert alert-success">
                    {{ session('profile_success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- 用户名修改 -->
                <div class="mb-10">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                </div>

                <!-- 上传照片 -->
                <div class="mb-3">
                    <label for="profile_picture" class="form-label">Upload Profile Picture</label>
                    <input type="file" name="profile_picture" id="profile_picture" class="form-control" accept="image/*" onchange="previewImage(event)">
                    <div class="mt-3">
                        <img id="preview" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('default-profile.png') }}" alt="Preview" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>

    <!-- 用户评论 -->
    <h2>Your Comments</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($comments->isEmpty())
        <p>You have not posted any comments yet.</p>
    @else
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Comment</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->comment }}</td>
                        <td>{{ $comment->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
