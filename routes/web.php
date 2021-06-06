<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanaderoController;
use App\Http\Controllers\PanController;


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
    return view('auth.login');
});

// Route::get('/panadero', function () {
//     return view('panadero.index');
// });

// Route::get('/pan', function () {
//     return view('pan.index');
// });

// Route::get('/panadero/create',[PanaderoController::class.'create']);
// Route::get('/pan/create',[PanController::class.'create']);

Route::resource('panadero',PanaderoController::class)->middleware('auth');
Route::resource('pan',PanController::class);



Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [PanaderoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function () {

    Route::get('/', [PanaderoController::class, 'indexPanadero'])->name('home');
    
});