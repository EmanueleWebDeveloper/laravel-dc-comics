@extends('layouts.app')

@section('title', 'comics SHOW')

@section('main')
<main class="text-center bg-dark-subtle">
    <h2>{{ $comic->title }}</h2>

    <p>{{ $comic->description }}</p>

</main>
@endsection
