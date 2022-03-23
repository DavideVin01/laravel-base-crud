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

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="title" class="form-label">Nome Fumetto</label>
                    <input type="text" class="form-control" id="title" name="title" value={{ $comic['title'] }}>
                </div>
                <div class="col-6 mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value={{ $comic['series'] }}>
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del fumetto</label>
                <textarea class="form-control" id="description" name="description" rows="7">{!! $comic['description'] !!}</textarea>
            </div>
            <div class="row">
                <div class="col-4 mb-3">
                    <label for="type" class="form-label">Tipo di fumetto</label>
                    <input type="text" class="form-control" id="type" name="type" value={{ $comic['type'] }} min="1"
                        max="30">
                </div>
                <div class="col-4 mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" value={{ $comic['price'] }}
                        min="1" step="any" required>
                </div>
                <div class="col-4 mb-3">
                    <label for="sale_date" class="form-label">In vendita dal</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date"
                        value={{ $comic['sale_date'] }}>
                </div>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value={{ $comic['thumb'] }}>
            </div>

            <a class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </a>
        </form>
    </div>
@endsection
