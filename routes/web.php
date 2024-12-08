<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index\RegisterController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminCommentController;
// 后台登录
Route::get('/admin/login', [AdminLoginController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'store'])->name('admin.login.store');
Route::post('/admin/logout', [AdminLoginController::class, 'destroy'])->name('admin.logout');

// 后台首页（需要登录）
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    // 管理员管理页面路由
    Route::get('/admin/manage', [AdminController::class, 'manage'])->name('admin.manage');

    // 编辑管理员页面
    Route::get('/admin/manage/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    // 更新管理员信息
    Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');

    // 显示添加管理员表单
    Route::get('/admin/add', [AdminController::class, 'create'])->name('admin.create');

    // 处理表单提交并添加管理员
    Route::post('/admin/add', [AdminController::class, 'store'])->name('admin.store');

    // 删除管理员
    Route::delete('/admin/manage/{id}', [AdminController::class, 'delete'])->name('admin.delete');


    // 用户管理页面
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');

    // 编辑用户页面
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');

    // 更新用户数据
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');

    // 显示添加用户页面
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');

    // 处理添加用户表单
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');

    // 删除用户
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');


    Route::get('/books/index', [AdminBookController::class, 'index'])->name('admin.books.index');
    Route::get('/books/create', [AdminBookController::class, 'create'])->name('admin.books.create');
    Route::post('/books/store', [AdminBookController::class, 'store'])->name('admin.books.store');
    Route::get('/books/edit/{id}', [AdminBookController::class, 'edit'])->name('admin.books.edit');
    Route::put('/books/update/{id}', [AdminBookController::class, 'update'])->name('admin.books.update');
    Route::delete('/books/delete/{id}', [AdminBookController::class, 'delete'])->name('admin.books.delete');

    Route::get('/comments/index', [AdminCommentController::class, 'index'])->name('admin.comments.index');
    Route::delete('/comments/{comment}', [AdminCommentController::class, 'delete'])->name('admin.comments.delete');
   


});






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');



Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth'); 


// 书籍列表路由
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'detail'])->name('books.detail');
Route::post('/books/{id}/comments', [BookController::class, 'storeComment'])->name('books.comments.store');

Route::delete('/comments/{id}', [CommentController::class, 'delete'])->name('comments.delete');

Route::get('/comments', [CommentController::class, 'userComments'])->name('comments.index');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');  // 登出后跳转到首页或其他页面
})->name('logout');