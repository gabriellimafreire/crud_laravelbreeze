<?php

use App\Http\Controllers\ClienteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cadastrarcliente',function(){
    return view('cadastrarcliente');
})->name('cadastrarcliente');

Route::post('/cadastrarcliente',[ClienteController::class,'create']);

Route::get('/listarcliente', [ClienteController::class,'show'])->middleware(['auth', 'verified'])->name('listarcliente');

Route::get('/editar/{id}', [ClienteController::class,'edit'])->middleware(['auth', 'verified'])->name('editarcliente');

Route::post('/editar/{id}', [ClienteController::class,'update'])->middleware(['auth', 'verified'])->name('atualizarcliente');

Route::delete('/excluir/{id}',[ClienteController::class,'destroy'])->name('excluir');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// EXCLUSÃO

Route::get('/confirm_excluir/{id}', [ClienteController::class,'confirm_excl'])->middleware(['auth', 'verified'])->name('editarcliente');


require __DIR__.'/auth.php';
