@extends('layouts.main')

@section('content')
    <h1>Crea Cazzuto</h1>

    {{-- @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route("characters.store") }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="name">Nome Cazzuto</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ old("name") }}">
            {{-- @error("title")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="height">Altezza Cazzuto</label>
            <input class="form-control" type="text" id="height" name="height" value="{{ old("height") }}">
            {{-- @error("height")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="weight">Peso Cazzuto</label>
            <input class="form-control" type="text" id="weight" name="weight" value="{{ old("weight") }}">
            {{-- @error("weight")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="mb-2" for="background">Background Cazzuto</label>
            <div class="form-floating">
                <textarea class="form-control" id="background" name="background">{{ old("background") }}</textarea>
            </div>
            {{-- @error("background")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="armor_class">Classe Armatura Cazzuto</label>
            <input class="form-control" type="text" id="armor_class" name="armor_class" value="{{ old("armor_class") }}">
            {{-- @error("armor_class")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="str">Forza Cazzuto</label>
            <input class="form-control" type="text" id="str" name="str" value="{{ old("str") }}">
            {{-- @error("str")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="dex">Destrezza Cazzuto</label>
            <input class="form-control" type="text" id="dex" name="dex" value="{{ old("dex") }}">
            {{-- @error("dex")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="con">Costituzione Cazzuto</label>
            <input class="form-control" type="text" id="con" name="con" value="{{ old("con") }}">
            {{-- @error("con")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="int">Intelligenza Cazzuto</label>
            <input class="form-control" type="text" id="int" name="int" value="{{ old("int") }}">
            {{-- @error("int")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="wis">Saggezza Cazzuto</label>
            <input class="form-control" type="text" id="wis" name="wis" value="{{ old("wis") }}">
            {{-- @error("wis")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label" for="cha">Carisma Cazzuto</label>
            <input class="form-control" type="text" id="cha" name="cha" value="{{ old("cha") }}">
            {{-- @error("cha")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
@endsection
