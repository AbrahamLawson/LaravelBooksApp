<?php

declare(strict_types=1);

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

final class BookController extends Controller
{
    public function __invoke(): View
    {
        $books = Book::all();
        return view('books.index', [
            'books' => $books,
        ]);
    }
}
