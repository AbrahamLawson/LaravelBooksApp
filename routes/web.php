<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CreateBooks\CreateBookController;
use App\Http\Controllers\DeleteBooks\DeleteBookController;
use App\Http\Controllers\EditBooks\EditBookController;
use App\Http\Controllers\StoreBooks\StoreBookController;
use App\Http\Controllers\UpdateBooks\UpdateBookController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefixe' => 'books'
], static function () {
    Route::get('/', BookController::class)
        ->name('books.index');

        Route::get('/create', CreateBookController::class)
        ->name('book.create');

    Route::post('/store', StoreBookController::class)
        ->name('book.store');

    Route::get('/edit/{id}', EditBookController::class)
        ->name('book.edit');

    Route::put('/update/{id}', UpdateBookController::class)
        ->name('book.update');

    Route::delete('/delete/{id}', DeleteBookController::class)
        ->name('book.delete');
});
