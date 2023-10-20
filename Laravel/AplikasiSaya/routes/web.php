<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RawatJalanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
// return ('hello');
// });

// Route::get('/dashboard', function () {
// return view ('dashboard');
// })->name(Dashboard)

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/dashboard', function () {
// return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
// Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
// Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// require __DIR__.'/auth.php';

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang-add', [BarangController::class, 'create']);
// Route::get('/barang', function() {
    // return view ('/barang');
// });
//
// Route::get('/home', function () {
    // return view('home');
// });

Route::get('/', function () {
    return view('home');
});
// Route::get('/', function () {
    // return view('welcome');
// });

// Route::get('/', [RawatJalanController::class, 'index']);
// Route::get('/add', [RawatJalanController::class, 'create']);
