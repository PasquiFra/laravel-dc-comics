
@extends('layouts.layout')

@section('title', 'Add-new')

@section('main-content')
    <section id="add-new">
        <h1 class="text-center py-3">Aggiungi un fumetto alla collezione</h1>
        
        @if ($errors->any())
        <div id="validation-alert" class="alert alert-danger">
            <h5>I seguenti campi contengono errori:</h5>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('comics.store')}}" method="post" novalidate class="flex container py-4 justify-content-center">
            @csrf
            <div class="input-group mb-3 w-50 p-1">
                <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}" placeholder="Inserisci titolo...">
            </div>
            <div class="input-group mb-3 w-100 p-1">
               <textarea id="description" name="description" id="" cols="50" rows="3"  value="{{old('description')}}" placeholder="Inserisci una descrizione..." class="w-100">{{old('title')}}</textarea>
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="thumb" type="url"  name="thumb" class="form-control" value="{{old('thumb')}}" placeholder="Inserisci url immagine...">
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <span class="input-group-text">$</span>
                <input id="price" type="number"  name="price" class="form-control" value="{{old('price')}}" placeholder="Inserisci prezzo...">
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="series" type="text" name="series" class="form-control" value="{{old('series')}}" placeholder="Inserisci serie... es.Action Comics">
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="type" type="text" name="type" class="form-control" value="{{old('type')}}" placeholder="Inserisci categoria... es.comic book">
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <span class="input-group-text">Data pubblicazione</span>
                <input id="sale_date" type="date"  name="sale_date" class="form-control" value="{{old('date')}}">
            </div>
            <div class="input-group mb-3 p-1">
                <input id="artists" type="text" name="artists" class="form-control" value="{{old('artists')}}" placeholder="Inserisci artisti...">
            </div>
            <div class="input-group mb-3 p-1">
                <input id="writers" type="text" name="writers" class="form-control" value="{{old('writers')}}" placeholder="Inserisci scrittori...">
            </div>
            <div class="w-100">
                <button type="submit" class="btn btn-success me-3">Crea Comic</button>
                <button type="reset" class="btn btn-danger">Cancella</button>
            </div>
        </form>
    </section>
@endsection
