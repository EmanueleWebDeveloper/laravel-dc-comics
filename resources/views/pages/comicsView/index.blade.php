@extends('layouts.app')

@section('title', 'comics index')

@section('main')
<main>
    <h2>index di comics</h2>

    <div class="table-responsive">

        <a
            class="btn btn-primary"
            href="{{}}"
            >Crea prodotto</a
        >


        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">thumb</th>
                    <th scope="col">series</th>
                    <th scope="col">sale_date</th>
                    <th scope="col">type</th>
                    {{-- <th scope="col">Descrizione</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $item)
                    <tr class="">
                        <td>{{ $item['Id'] }}</td>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ $item['thumb'] }}</td>
                        <td>{{ $item['series'] }}</td>
                        <td>{{ $item['sale_date'] }}</td>
                        <td>{{ $item['type'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</main>
@endsection
