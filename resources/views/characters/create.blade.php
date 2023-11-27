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
            <label for="name" class="form-label">Nome Cazzuto</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old("name") }}">
            {{-- @error("title")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="height" class="form-label">Altezza Cazzuto</label>
            <input type="text" class="form-control" id="height" name="height" value="{{ old("height") }}">
            {{-- @error("height")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Peso Cazzuto</label>
            <input type="text" class="form-control" id="weight" name="weight" value="{{ old("weight") }}">
            {{-- @error("weight")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="background" class="mb-2">Background Cazzuto</label>
            <div class="form-floating">
                <textarea class="form-control" id="background" name="background">{{ old("background") }}</textarea>
            </div>
            {{-- @error("background")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="armor_class" class="form-label">Classe Armatura Cazzuto</label>
            <input type="text" class="form-control" id="armor_class" name="armor_class" value="{{ old("armor_class") }}">
            {{-- @error("armor_class")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="str" class="form-label">Forza Cazzuto</label>
            <input type="text" class="form-control" id="str" name="str" value="{{ old("str") }}">
            {{-- @error("str")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="dex" class="form-label">Destrezza Cazzuto</label>
            <input type="text" class="form-control" id="dex" name="dex" value="{{ old("dex") }}">
            {{-- @error("dex")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="con" class="form-label">Costituzione Cazzuto</label>
            <input type="text" class="form-control" id="con" name="con" value="{{ old("con") }}">
            {{-- @error("con")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="int" class="form-label">Intelligenza Cazzuto</label>
            <input type="text" class="form-control" id="int" name="int" value="{{ old("int") }}">
            {{-- @error("int")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="wis" class="form-label">Saggezza Cazzuto</label>
            <input type="text" class="form-control" id="wis" name="wis" value="{{ old("wis") }}">
            {{-- @error("wis")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <div class="mb-3">
            <label for="cha" class="form-label">Carisma Cazzuto</label>
            <input type="text" class="form-control" id="cha" name="cha" value="{{ old("cha") }}">
            {{-- @error("cha")
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
@endsection
