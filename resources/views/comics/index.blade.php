@extends('layouts.main')
@section('page-title', 'Comics')

@section('title')
    <div class="container mt-3">
        <h1>COMICS</h1>
    </div>
@endsection

@section('content')
    <div class="container">
        <h3>Elenco di tutti i fumetti <strong>DC COMICS</strong></h3>
    </div>

    <div class="d-flex flex-wrap container my-3">
        @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['series'] }}">
                <div class="card-body">
                    <h5 class="card-title"><strong>Titolo: </strong>{{ $comic['title'] }}</h5>
                    <p class="card-text h-25"><strong>Descrizione: </strong>{{ Str::limit($comic->description, 200) }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Prezzo: </strong> ${{ $comic['price'] }}</li>
                    <li class="list-group-item"><strong>Data di vendita: </strong>{{ $comic['sale_date'] }}</li>
                    <li class="list-group-item"><strong>Serie: </strong>{{ $comic['series'] }}</li>
                    <li class="list-group-item"><strong>Tipo: </strong>{{ $comic['type'] }}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
