<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
    // return view('welcome');
// });
//
// Route::get('/dashboard', function () {
    // return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
//
// Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
//
// require __DIR__.'/auth.php';
//
// ## cara fajar
// Route::get('/about', function() {
    // return 'whatever';
// });
//
// Route::get('/contact', function() {
    // return view ('contact', ['name' => 'cara fajar', 'phone' => '0851........',]);
// });
//
// Route::view('/contact', 'contact', ['name' => 'cara fajar', 'phone' => '0851........',]);
//
// Route::redirect('/contact', '/contact-us');
//
// Route::get('/product/{id}', function($id) {
    // return 'ini adalah product dengan id ' . $id;
    // return view ('product.detail', ['id' => $id]);
// });
//
// Route::prefix('contact')->group(function () {
    // Route::get('/profil-admin', function() {
        // return 'profil-admin';
    // });
//
    // Route::get('/about-admin', function() {
        // return 'about-admin';
    // });
//
    // Route::get('/contact-admin', function() {
        // return 'contact-admin';
    // });
//
    // Route::get('/profil-admin2', function() {
        // return 'profil-admin2';
    // });
//
    // Route::get('/about-admin2', function() {
        // return 'about-admin2';
    // });
//
    // Route::get('/contact-admin2', function() {
        // return 'contact-admin2';
    // });
// });

Route::get('/', function() {
    return view('/home', [
        'name' => '4lend',
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka', 'kiwi'],
    ]);
});

Route::get('/about', function () {
    return view('/about');
});
