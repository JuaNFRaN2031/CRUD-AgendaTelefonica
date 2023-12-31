<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::resource('agenda', AgendaController::class, ['index']);


Route::get('/cancelar', function () {
    return redirect()->route('agenda.index')->with('cancelar', 'Operación cancelada!');
})->name('cancelar');


Route::get('/agenda/{id}/confirm', [AgendaController::class, 'confirm'])->name('agenda.confirm');
