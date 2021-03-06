@extends('layouts.main')
@section('page-title', 'Comic')

@section('content')
    <div class="container">
        <h3 class="mb-5"><strong>DC COMICS - {{ $comic['series'] }}</strong></h3>
        <div class="row">
            <div class="col-4">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" width="350">
            </div>
            <div class="col-8 d-flex flex-column justify-content-center">
                <h5 class="card-title"><strong>Titolo: </strong>{{ $comic['title'] }}</h5>
                <p class="card-text h-25 my-3"><strong>Descrizione: </strong>{{ $comic->description }}</p>
                <hr>
                <div class="d-flex justify-content-end align-items-end flex-column">
                    <div class="my-2"><strong>Prezzo: </strong>${{ $comic->price }}</div>
                    <div class="my-2"><strong>Serie: </strong>{{ $comic->series }}</div>
                    <div class="my-2"><strong>Data di vendita: </strong>{{ $comic->sale_date }}</div>
                </div>
                <div class="d-flex">
                    <form action="{{ route('comics.edit', $comic->id) }}" method="get">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-warning text-white shadow-sm me-2">Modifica</button>
                    </form>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="delete-form"
                        data-name="{{ $comic->series }}">
                        @csrf
                        @method('delete')

                        <input type="submit" value="Cancella" class="btn btn-sm btn-danger shadow-sm">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional-scripts')
    <script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
