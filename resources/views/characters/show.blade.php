@extends('layouts.main')

@section('content')
    <h1>{{ $character->name }} <a class="btn btn-warning" href="{{ route('characters.edit', $character) }}"><i class="fa-solid fa-pencil"></i></a> <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i></a></h1>

    <div class="card card-show mb-3" style="max-width: 80vw;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $character->image }}" class="img-fluid rounded-start h-100" alt="{{ $character->name }}">
          </div>

          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title mb-3"><strong>Nome Cazzuto:</strong> {{ $character->name }}</h5>
                <p class="card-title"><strong>Altezza Cazzuto:</strong> {{ $character->height }}</p>
                <p class="card-title"><strong>Peso Cazzuto:</strong> {{ $character->weight }}</p>
                <p class="card-title"><strong>Classe Armatura Cazzuto:</strong> {{ $character->armor_class }}</p>
                <p class="card-title"><strong>Forza Cazzuto:</strong> {{ $character->str }}</p>
                <p class="card-title"><strong>Destrezza Cazzuto:</strong> {{ $character->dex }}</p>
                <p class="card-title"><strong>Costituzione Cazzuto:</strong> {{ $character->con }}</p>
                <p class="card-title"><strong>Inteligenza Cazzuto:</strong> {{ $character->int }}</p>
                <p class="card-title"><strong>Saggezza Cazzuto:</strong> {{ $character->wis }}</p>
                <p class="card-title"><strong>Carisma Cazzuto:</strong> {{ $character->cha }}</p>
                <p class="card-title"><strong>Descrizione Cazzuto:</strong> {{ $character->background }}</p>
            </div>
          </div>
        </div>
      </div>

    @include('partials.btn_next_prev')
@endsection
