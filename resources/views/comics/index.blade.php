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
        <a href="{{ route('comics.create') }}" class="d-flex">
            <button type="button" class="btn btn-primary shadow-sm">Crea un nuovo fumetto</button>
        </a>
    </div>

    <div class="d-flex flex-wrap container my-3">
        @foreach ($comics as $comic)
            <div class="card m-2" style="width: 18rem;">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['series'] }}">
                <div class="card-body">
                    <h5 class="card-title"><strong>Titolo: </strong>{{ $comic['title'] }}</h5>
                    <p class="card-text"><strong>Descrizione: </strong>{{ Str::limit($comic->description, 100) }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Prezzo: </strong> ${{ $comic['price'] }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('comics.show', $comic->id) }}" class="text-info fw-bold card-link">Vedi
                        dettagli</a>
                </div>
                <div class="card-body d-flex justify-content-between">
                    <a href="{{ route('comics.edit', $comic->id) }}" class="text-info fw-bold card-link">
                        <button class="btn btn-sm btn-warning text-white shadow-sm">Modifica</button>
                    </a>
                    @include('includes.delete')
                </div>
            </div>
        @endforeach
    </div>
@endsection
