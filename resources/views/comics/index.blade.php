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
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
