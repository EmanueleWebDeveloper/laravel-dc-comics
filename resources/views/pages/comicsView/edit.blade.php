@extends('layouts.app')

@section('title', 'comics edit')

@section('main')
<main>
    <div class="container-1">
        <div class="current-series">edit COMIC:</div>


        <form action="{{route('comics.update', $comic->id)}}" method="POST">

            @csrf
            @method('PUT')

            <input type="text"
            name="title"
            id="title"
            value="{{ old('title') ?? $comic->title }}">
            <input
            type="textarea"
            name="description"
            id="description"
            value="{{ old('description') ?? $comic->description }}">
            <input
            type="text"
            name="thumb"
            id="thumb"
            placeholder="Insert The Comic Thumb:">
            <input
            type="number"
            name="price"
            id="price"
            value="{{ old('price') ?? $comic->price }}">
            <input
            type="text"
            name="series"
            id="series"
            value="{{ old('series') ?? $comic->series }}">
            <input
            type="date"
            name="sale_date"
            id="sale_date"
            value="{{ old('sale_date') ?? $comic->sale_date }}">
            <input
            type="text"
            name="type"
            id="type"
            value="{{ old('type') ?? $comic->type }}">

            <button
            class='addNewComic'
            type="submit">SEND
            </button>
        </form>

    </div>
</main>
@endsection
