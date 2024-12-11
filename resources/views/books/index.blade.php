@extends('layouts.app')

@section('content')
<div style="text-align: center;">
    <h1 style="font-size: 48px; font-weight: bold;">Books</h1>
    <form action="{{ url('/') }}" method="GET" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Search for books..." style="padding: 10px; width: 300px;">
        <button type="submit" style="padding: 10px; font-size: 16px;">Search</button>
    </form>

    @foreach ($books as $book)
        <div style="display: inline-block; text-align: center; margin: 20px; width: 200px;">
            <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}" style="width: 150px; height: auto; border: 1px solid #ccc; padding: 5px;">
            <h2 style="font-size: 18px;">{{ $book->title }}</h2>
            <p style="color: #000;  font-size: 18px; font-weight: bold; margin-bottom: 10px;">{{ $book->author }}</p>
            <a href="{{ route('books.show', $book->id) }}" style="text-decoration: none; color: blue; font-size: 16px; font-weight: bold;">View Details</a>
        </div>
    @endforeach
</div>
@endsection
