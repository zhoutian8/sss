@extends('magic.app')

@section('content')
<div class="slider-area d-flex align-items-center" style="background-color: #f7f7f7; padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div style="background-color: #fff; border-radius: 10px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h2 style="text-align: center; color: #c79787;">Login</h2>

                    <!-- 显示错误信息 -->
                    @if(session('success'))
                        <p style="color: green; text-align: center;">{{ session('success') }}</p>
                    @endif

                    @if($errors->any())
                        <ul style="color: red; text-align: center;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <form action="{{ route('login.store') }}" method="POST" style="margin-top: 20px;">
                        @csrf
                        <div style="margin-bottom: 15px;">
                            <label for="email" style="display: block; color: #333; margin-bottom: 5px;">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" 
                                   style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="password" style="display: block; color: #333; margin-bottom: 5px;">Password</label>
                            <input type="password" name="password" id="password" 
                                   style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                        </div>
                        <button type="submit" 
                                style="background-color: #c79787; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; width: 100%; font-size: 16px;">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
