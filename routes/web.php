<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefixe' => '/'
], static function () {
    Route::get('books', BookController::class)->name('index.book');
});
