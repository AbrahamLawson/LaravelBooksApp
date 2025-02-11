<?php

declare(strict_types=1);

namespace App\Http\Controllers\CreateBooks;

use Illuminate\View\View;

final class CreateBookController
{
    public function __invoke(): View
    {
        return view('books.create');
    }
}
