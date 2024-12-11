<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        // 构建查询
        $query = Book::query();

        // 如果有搜索参数，执行搜索
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('author', 'like', '%' . $request->search . '%');
        }

        // 获取查询结果
        $books = $query->get();

        // 返回视图并传递数据
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        // 查找指定的书籍
        $book = Book::findOrFail($id);

        // 返回视图并传递书籍数据
        return view('books.show', compact('book'));
    }
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('excerpt');
            $table->string('cover_image')->nullable();
            $table->timestamps();
        });

        // 添加默认数据
        DB::table('books')->insert([
            [
                'title' => 'The Power of Positive Thinking',
                'author' => 'Norman Vincent Peale',
                'excerpt' => 'This classic book focuses on how cultivating a positive mindset can boost confidence, overcome obstacles, and achieve success. Peale offers practical methods such as repeating positive affirmations, prayer, and meditation to help readers develop optimism and improve their quality of life.',
                'cover_image' => 'public/images/books/1.jpg',
            ],
            [
                'title' => 'You Are a Badass',
                'author' => 'Jen Sincero',
                'excerpt' => 'This humorous and motivational self-help book helps readers identify self-limiting beliefs, shift their perspectives, and unlock their full potential. Through personal anecdotes and actionable advice, Sincero encourages readers to embrace their uniqueness and own their inner power',
                'cover_image' => 'public/images/books/2.jpg',
            ],
            [
                'title' => 'The Happiness Project',
                'author' => 'Gretchen Rubin',
                'excerpt' => 'This book chronicles the author’s year-long journey to boost happiness by focusing on different themes each month, such as productivity, relationships, and leisure. Drawing on scientific research and personal experiments, Rubin offers insights and practical steps for anyone looking to make small changes for greater happiness.',
                'cover_image' => 'public/images/books/3.jpg',
            ],
            [
                'title' => 'The Four Agreements',
                'author' => 'Don Miguel Ruiz',
                'excerpt' => 'Based on Toltec wisdom, this book presents four principles for achieving personal freedom and inner peace:Be impeccable with your word.Don’t take anything personally.Don’t make assumptions.Always do your best.Ruiz uses these agreements to guide readers toward reducing emotional burdens and living more authentically.',
                'cover_image' => 'public/images/books/4.jpg',
            ],
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'excerpt' => 'This science-backed book explores how small, incremental habit changes can lead to significant personal growth. James Clear emphasizes the power of habits and provides simple yet effective techniques to build good habits and break bad ones. The book includes case studies and practical strategies to achieve long-term success through 1% daily improvements.',
                'cover_image' => 'public/images/books/5.jpg',
            ]
        ]);
    }

}

