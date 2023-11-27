@extends('layouts.main')

@section('content')
    <h1>Lista Cazzuti</h1>

    <div class="row d-flex flex-wrapper">
        @foreach ($characters as $character)
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $character->image }}" class="card-img-top" alt="{{ $character->name }}">

                    <div class="card-body">
                    <h5 class="card-title">Nome Cazzuto: {{ $character->name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
