@extends('layouts.app');

@section('title', 'Comics | Home')

@section('main')
    <main>
        <h1 class="text-center">Comics</h1>
        {{ dd($comics) }}
        {{-- <div class="table-responsive">

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
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($comics as $comic)
                              <tr class="">
                                  <td>{{ $comic['Id'] }}</td>
                                  <td>{{ $comic['title'] }}</td>
                                  <td>{{ $comic['description'] }}</td>
                                  <td>{{ $comic['thumb'] }}</td>
                                  <td>{{ $comic['series'] }}</td>
                                  <td>{{ $comic['sale_date'] }}</td>
                                  <td>{{ $comic['type'] }}</td>
                              </tr>
                          @endforeach

                      </tbody>
                  </table>
              </div> --}}
    </main>
@endsection
