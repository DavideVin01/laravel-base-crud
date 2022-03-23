@extends('layouts.main')
@section('page-title', 'Comics')

@section('title')
    <div class="container mt-3">
        <h1>COMICS</h1>
    </div>
@endsection

@section('content')
    <div class="container">
        <h3>Aggiungi il tuo fumetto</strong></h3>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="title" class="form-label">Nome Fumetto</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Inserisci il nome del fumetto">
                </div>
                <div class="col-6 mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series"
                        placeholder="Inserisci la serie del fumetto">
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del fumetto</label>
                <textarea class="form-control" id="description" name="description" placeholder="Inserisci una descrizione"
                    rows="3"></textarea>
            </div>
            <div class="row">
                <div class="col-4 mb-3">
                    <label for="type" class="form-label">Tipo di fumetto</label>
                    <input type="text" class="form-control" id="type" name="type"
                        placeholder="Inserisci un tipo di fumetto" min="1" max="30">
                </div>
                <div class="col-4 mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci un prezzo"
                        min="1" max="30">
                </div>
                <div class="col-4 mb-3">
                    <label for="sale_date" class="form-label">In vendita dal</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date"
                        placeholder="Inserisci una data">
                </div>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    placeholder="Inserisci l'URL dell'immagine">
            </div>

            <a class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Crea</button>
            </a>
        </form>
    </div>
@endsection
