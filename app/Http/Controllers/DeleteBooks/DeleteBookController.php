<?php

declare(strict_types=1);

namespace App\Http\Controllers\DeleteBooks;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;

final class DeleteBookController
{
    public function __invoke(int $bookId): RedirectResponse
    {
        $book = Book::query()->findOrFail($bookId);
        $book?->delete();

        return redirect()->route('books.index');
    }
}
