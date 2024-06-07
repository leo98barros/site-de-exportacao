<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/sobre', 'sobre')->name('sobre');
    Route::get('/produtos', 'produto')->name('produto');
    Route::get('/produtos/{produto}', 'produto')->name('produto.show');
    Route::get('/contato', 'contato')->name('contato');
});

Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::post('painel', 'painel')->name('painel');
    });

    Route::resource('produtos', ProdutoController::class);
    Route::resource('categorias', CategoriaController::class);
});
