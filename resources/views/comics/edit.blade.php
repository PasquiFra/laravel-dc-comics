@extends('layouts.layout')

@section('title', 'Add-new')

@section('main-content')
    <section id="add-new">
        <h1 class="text-center py-3">Modifica {{$comic->title}}</h1>
        
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
        <form action="{{route('comics.update', $comic->id ) }}" method="post" class="flex container py-4 justify-content-center">
            @csrf
            @method('put')
            <div class="input-group mb-3 w-50 p-1">
                <input type="text" required id="title" name="title" class="form-control" value="{{old('title', $comic->title)}}" placeholder="Inserisci titolo...">
            </div>
            <div class="input-group mb-3 w-100 p-1">
               <textarea id="description" name="description" id="" cols="50" rows="3" placeholder="Inserisci una descrizione..." class="w-100">{{old('title', $comic->description)}}</textarea>
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="thumb" type="url"  name="thumb" class="form-control" value="{{old('thumb', $comic->thumb)}}" placeholder="Inserisci url immagine...">
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <span class="input-group-text">$</span>
                <input id="price" type="number"  name="price" class="form-control" value="{{old('price', $comic->price)}}" placeholder="Inserisci prezzo...">
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="series" type="text"  required name="series" class="form-control" value="{{old('series', $comic->series)}}" placeholder="Inserisci serie... es.Action Comics">
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="type" type="text"  required name="type" class="form-control" value="{{old('type', $comic->type)}}" placeholder="Inserisci categoria... es.comic book">
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <span class="input-group-text">Data pubblicazione</span>
                <input id="sale_date" type="date" required name="sale_date" class="form-control" value="{{old('date', $comic->date)}}">
            </div>
            <div class="input-group mb-3 p-1">
                <input id="artists" type="text" name="artists" class="form-control" value="{{old('artists', $comic->artists)}}" placeholder="Inserisci artisti...">
            </div>
            <div class="input-group mb-3 p-1">
                <input id="writers" type="text" name="writers" class="form-control" value="{{old('writers', $comic->writers)}}" placeholder="Inserisci scrittori...">
            </div>
            <div class="w-100">
                <button type="submit" class="btn btn-success me-3">Invia Modifica</button>
                <button type="reset" class="btn btn-danger">Svuota</button>
            </div>
        </form>
    </section>
@endsection
