@extends('magic.app')

@section('content')
<div class="slider-area d-flex align-items-center" style="background-color: #f7f7f7; padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div style="background-color: #fff; border-radius: 10px; padding: 30px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h2 style="text-align: center; color: #c79787;">Register</h2>

                    <!-- 显示成功提示 -->
                    @if(session('success'))
                        <p style="color: green; text-align: center;">{{ session('success') }}</p>
                    @endif
                    
                    <form action="{{ route('register.store') }}" method="POST" style="margin-top: 20px;">
                        @csrf
                        <div style="margin-bottom: 15px;">
                            <label for="username" style="display: block; color: #333; margin-bottom: 5px;">Username:</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}" 
                                   style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            @error('username')
                                <p style="color: red; font-size: 14px;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="email" style="display: block; color: #333; margin-bottom: 5px;">Email:</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" 
                                   style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            @error('email')
                                <p style="color: red; font-size: 14px;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="password" style="display: block; color: #333; margin-bottom: 5px;">Password:</label>
                            <input type="password" name="password" id="password" 
                                   style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            @error('password')
                                <p style="color: red; font-size: 14px;">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" 
                                style="background-color: #c79787; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; width: 100%; font-size: 16px;">
                            Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
