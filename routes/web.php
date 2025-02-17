<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HalamanController;

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

//Autentikasi
Route::get('/form-login', [UserController::class, 'index'])->name('form-login');
Route::post('/login', [UserController::class, 'autentikasi'])->name('login');
Route::get('/form-signup', [UserController::class, 'signup'])->name('form-signup');
Route::post('/signup', [UserController::class, 'registrasi'])->name('signup');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/halaman/booklist', [UserController::class, 'booklist'])->name('booklist');
Route::post('/pinjam/{buku:id}', [UserController::class, 'pinjam'])->name('pinjam');
Route::post('/kembalikan/{peminjaman}/{denda}', [UserController::class, 'kembalikan'])->name('kembalikan');

// Book
Route::get('/', [BukuController::class, 'index'])->name('index');
Route::get('/halaman/book', [BukuController::class, 'buku'])->name('book');
Route::get('/halaman/audiobook', [BukuController::class, 'audio'])->name('audiobook');

// Halaman
Route::get('/halaman/blog', [HalamanController::class, 'blog'])->name('blog');
Route::get('/halaman/about', [HalamanController::class, 'about'])->name('about');
Route::get('/halaman/rules', [HalamanController::class, 'rules'])->name('rules');
Route::get('/halaman/contact', [HalamanController::class, 'contact'])->name('contact');
