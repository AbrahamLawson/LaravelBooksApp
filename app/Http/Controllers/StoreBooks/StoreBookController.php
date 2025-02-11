<?php
 declare(strict_types=1);

namespace App\Http\Controllers\StoreBooks;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class StoreBookController
{
    public function __invoke(Request $request): RedirectResponse
    {
        $user = User::factory()->create();

        Book::create([
            'title' => $request->get('title'),
            'user_id' => $user->id,
        ]);

        return redirect()->route('books.index');
    }
}
