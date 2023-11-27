@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Modifica {{ $character->name }}</h1>

    {{-- @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route("characters.update", $character) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label" for="name">Nome Cazzuto</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ old("name", $character->name) }}">
            {{-- @error("title")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="height">Altezza Cazzuto</label>
            <input class="form-control" type="text" id="height" name="height" value="{{ old("height", $character->height) }}">
            {{-- @error("height")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="weight">Peso Cazzuto</label>
            <input class="form-control" type="text" id="weight" name="weight" value="{{ old("weight", $character->weight) }}">
            {{-- @error("weight")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="mb-2" for="background">Background Cazzuto</label>
            <div class="form-floating">
                <textarea class="form-control" id="background" name="background">{{ old("background", $character->background) }}</textarea>
            </div>
            {{-- @error("background")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="armor_class">Classe Armatura Cazzuto</label>
            <input class="form-control" type="text" id="armor_class" name="armor_class" value="{{ old("armor_class", $character->armor_class) }}">
            {{-- @error("armor_class")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="str">Forza Cazzuto</label>
            <input class="form-control" type="text" id="str" name="str" value="{{ old("str", $character->str) }}">
            {{-- @error("str")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="dex">Destrezza Cazzuto</label>
            <input class="form-control" type="text" id="dex" name="dex" value="{{ old("dex", $character->dex) }}">
            {{-- @error("dex")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="con">Costituzione Cazzuto</label>
            <input class="form-control" type="text" id="con" name="con" value="{{ old("con", $character->con) }}">
            {{-- @error("con")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="int">Intelligenza Cazzuto</label>
            <input class="form-control" type="text" id="int" name="int" value="{{ old("int", $character->int) }}">
            {{-- @error("int")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="wis">Saggezza Cazzuto</label>
            <input class="form-control" type="text" id="wis" name="wis" value="{{ old("wis", $character->wis) }}">
            {{-- @error("wis")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="cha">Carisma Cazzuto</label>
            <input class="form-control" type="text" id="cha" name="cha" value="{{ old("cha", $character->cha) }}">
            {{-- @error("cha")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
@endsection
