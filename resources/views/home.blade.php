@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')
    <main id="home-content">
        <h1 class="text-center py-4">Benvenuto nell'Universo DC - Comix!</h1>
        <div class="container flex-rules pb-2 py-3">
            <div class="row ">
                <div class="col my-4">
                    <div id="add-comics" class="options mb-3">
                        <a href="{{route('comics.create')}}">
                            <h5 class="text-center">Aggiungi un nuovo fumetto alla collezione</h5>
                        </a>
                    </div>                    
                    <div  id="fans" class="options">
                        <a href="#">
                            <h5 class="text-center">Fans</h5>
                        </a>
                    </div>                    
                </div>
                
                <div class="col my-4">
                    <div id="movies" class="options mb-3">
                        <a href="#">
                            <h5 class="text-center">Movies</h5>
                        </a>
                    </div>                    
                    <div id="go-shop" class="options">
                        <a href="#">
                            <h5 class="text-center">Store</h5>
                        </a>
                    </div>                    
                </div>
                
            </div>
        </div>
    </main>

@endsection