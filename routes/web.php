<?php
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;

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

// Route::get('/master', function () {
//    return view('layout.master');
// });

Route::get('/', function () {
    return view('pages/welcome');
});

Route::get('/1', function () {
    return view('home');
});

Route::get('/from-input',[PagesController::class,'FromInput']);
Route::post('/welcome',[PagesController::class,'Welcome']);

Route::get('/datatable', function () {
    return view('datatable.index');
});

// CRUD CAST
Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']); // Ubah menjadi Route::post
Route::get('/cast/{id}/edit', [CastController::class, 'edit']); // Menggunakan {id} sebagai parameter
Route::put('/cast/{id}', [CastController::class, 'update']); // Menggunakan metode PUT untuk update
Route::delete('/cast/{id}', [CastController::class, 'destroy']);