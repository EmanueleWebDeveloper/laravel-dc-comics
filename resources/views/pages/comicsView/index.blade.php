@extends('layouts.app')

@section('title', 'comics index')

@section('main')
<main class="text-center bg-dark-subtle">
    <h2>HOME comics</h2>
    <style>

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0 -10px;
        }
        .card {
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            flex-basis: calc(20% - 20px);
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
        }

    </style>
        <a href="{{route('comics.create') }}" class="btn btn-primary">Crea Fumetto</a>

    <div class="card-container p-5">
        @foreach ($comics as $comic)
            <div class="card text-start">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body p-3">
                    <h6>id:{{ $comic->id }}</h6>
                    <a href="{{ route('comics.show', $comic->id) }}">Titolo:{{ $comic->title }}</a>

                    <h4>Tipo: {{ $comic->series }}</h4>
                    <h5>Data di uscita: {{ $comic->sale_date }}</h5>
                    <h5>tipo: {{ $comic->type }}</h5>

                    <a href="#" class="btn btn-primary ">Edit</a>
                    <a href="#" class="btn btn-primary ">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
