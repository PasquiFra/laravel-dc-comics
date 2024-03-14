
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

{{-- 
"title" => "Action Comics #1000: The Deluxe Edition",
"description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
"thumb" => "https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY",
"price" => "$19.99",
"series" => "Action Comics",
"sale_date" => "2018-10-02",
"type" => "comic book",
"artists" => [

    "José Luis García-López",

    "Clay Mann",

    "Rafael Albuquerque",

    "Patrick Gleason",

    "Dan Jurgens",

    "Joe Shuster",

    "Neal Adams",

    "Curt Swan",

    "John Cassaday",

    "Olivier Coipel",

    "Jim Lee"

],
"writers" => [

    "Brad Meltzer",

    "Tom King",

    "Scott Snyder",

    "Geoff Johns",

    "Brian Michael Bendis",

    "Paul Dini",

    "Louise Simonson",

    "Richard Donner",

    "Marv Wolfman",

    "Peter J. Tomasi",

    "Dan Jurgens",

    "Jerry Siegel",

    "Paul Levitz" --}}