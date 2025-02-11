<?php

declare(strict_types=1);

namespace App\Http\Controllers\EditBooks;

use App\Models\Book;
use Illuminate\View\View;

final class EditBookController
{
    public function __invoke(int $bookId): View
    {
        $book = Book::query()->findOrFail($bookId);

        return view('books.edit', [
            'book' => $book
        ]);
    }
}
