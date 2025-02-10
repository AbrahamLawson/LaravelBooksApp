@extends('app')

@section('content')
    @foreach ($books as $book)
        {{ $book->title ?? null  }} de {{ $book->user->id ?? null }}
    @endforeach

@endsection

