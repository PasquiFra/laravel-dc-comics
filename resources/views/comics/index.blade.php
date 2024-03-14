

@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')
    <section id="main-comics">
        <div class="flex container">
            <div id="current-series">
                <h1 class="flex">current series</h1>
            </div>
            <ul class="card-col mt-3">
                @foreach ($books as $book)
                <li class="col">
                    <div class="my-card">
                        <figure>
                            <a href="{{route('comics.show', $book->id)}}">
                                <img src="{{$book['thumb']}}" alt="">
                            </a>
                        </figure>
                        <h5>
                            <a href="{{route('comics.show', $book->id)}}">{{$book['title']}}</a>
                        </h5>
                    </div>
                </li>
                @endforeach
                <div id="load-more" class="flex center">
                    <a class="btn" href="#">load more</a>
                </div>
                <div id="go-add" class="flex center">
                    <a href="{{route('comics.create')}}">
                        <h5 class="text-center">Aggiungi un nuovo fumetto alla collezione</h5>
                    </a>
                </div>    
            </ul>
        </div>
    </section>
@endsection
