@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Lista Cazzuti</h1>

    <div class="row d-flex flex-wrapper">
        @foreach ($characters as $character)
            <div class="col mb-3">
                <a href="{{ route('characters.show', $character) }}">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $character->image }}" alt="{{ $character->name }}">

                        <div class="card-body">
                            <h5 class="card-title mb-3">Nome Cazzuto: {{ $character->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
