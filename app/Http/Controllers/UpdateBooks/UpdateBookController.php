<?php

declare(strict_types=1);

namespace App\Http\Controllers\UpdateBooks;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class UpdateBookController
{
    public function __invoke(Request $request, int $bookId): RedirectResponse
    {
        $book = Book::query()->findOrFail($bookId);

        $book->update([
            'title' => $request->get('title'),
        ]);

       return redirect()->route('books.index');
    }
}
