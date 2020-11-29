<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientBlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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
    return view('home');
});

Route::get('/base', function () {
    return view('template.base');
});


// Halaman Admin
Route::get('admin/dashboard', [HomeController::class, 'showBeranda']);
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);

// Halaman Admin 
Route::prefix('admin')->middleware('auth')->group(function(){
Route::post('blog/filter', [BlogController::class, 'filter'])->middleware('auth');
Route::resource('blog', BlogController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('user', UserController::class);

});

// Halaman Client
Route::get('/', [ClientBlogController::class, 'index']);
Route::post('/filter', [ClientBlogController::class, 'filter']);
Route::get('baca/{blog}', [ClientBlogController::class, 'create']);
Route::post('komentar/{blog}', [ClientBlogController::class, 'store']);
Route::get('bayar', [ClientBlogController::class, 'show']);
Route::get('bayar/{blog}/edit', [ClientBlogController::class, 'edit']);
Route::put('bayar/{blog}', [ClientBlogController::class, 'update']);
Route::delete('bayar/{blog}', [ClientBlogController::class, 'destroy']);

// Login section
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'prosesLogin']);
Route::get('logout', [AuthController::class, 'logout']);


Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);

// // Halaman Kategori
// Route::get('admin/kategori', [KategoriController::class, 'index']);
// Route::get('admin/kategori/create', [KategoriController::class, 'create']);
// Route::post('admin/kategori', [KategoriController::class, 'store']);
// Route::get('admin/kategori/{kategori}', [KategoriController::class, 'show']);
// Route::get('admin/kategori/{kategori}/edit', [KategoriController::class, 'edit']);
// Route::put('admin/kategori/{kategori}', [KategoriController::class, 'update']);
// Route::delete('admin/kategori/{kategori}', [KategoriController::class, 'destroy']);

// // Halaman Makanan
// Route::get('admin/makanan', [MakananController::class, 'index']);
// Route::get('admin/makanan/create', [MakananController::class, 'create']);
// Route::post('admin/makanan', [MakananController::class, 'store']);
// Route::get('admin/makanan/{makanan}', [MakananController::class, 'show']);
// Route::get('admin/makanan/{makanan}/edit', [MakananController::class, 'edit']);
// Route::put('admin/makanan/{makanan}', [MakananController::class, 'update']);
// Route::delete('admin/makanan/{makanan}', [MakananController::class, 'destroy']);



// // Halaman User
// Route::get('admin/user', [UserController::class, 'index']);
// Route::get('admin/user/create', [UserController::class, 'create']);
// Route::post('admin/user', [UserController::class, 'store']);
// Route::get('admin/user/{user}', [UserController::class, 'show']);
// Route::get('admin/user/{user}/edit', [UserController::class, 'edit']);
// Route::put('admin/user/{user}', [UserController::class, 'update']);
// Route::delete('admin/user/{user}', [UserController::class, 'destroy']);

