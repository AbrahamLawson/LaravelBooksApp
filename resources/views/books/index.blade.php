@extends('app')

@section('content')
    <p>
        <a href="{{ route('book.create') }}"> Crée un livre </a>
    </p>

     <br>
    <span>Les livres</span>
    @foreach ($books as $book)
        <li>
            {{ $book->title ?? null  }} de {{ $book->user->id ?? null }}
        </li>

        <br>
        <p>
            <a href="{{ route('book.edit', $book->id) }}"> Editer votre livre </a>
        </p>

        <br>

        {{-- Form for delete book --}}
        <form action="{{ route('book.delete', $book->id) }}" method="post">
            @csrf
            @method('DELETE')

            <button type="submit">Supprimer le livre</button>
        </form>

    @endforeach

@endsection

