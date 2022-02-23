@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')

<main class="comic">

    <div class="container">
        <div class="row">
            <h1 class="h1">Admin - All Comics</h1>
        </div>
        <div class="row">
            <div class="col mb-2">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Add new comic</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr">
                            <th>Title</th>
                            <th>Writers</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>Date Release</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->writers }}</td>
                            <td>{{ $comic->artists }}</td>
                            <td>{{ $comic->price }} €</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                {{ $comics->links() }}
            </div>
        </div>
    </div>

</main>

@endsection