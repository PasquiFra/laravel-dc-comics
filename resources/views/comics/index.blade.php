

@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')
    <section id="main-comics">
        <div class="flex container">
            <div id="current-series">
                <h1 class="flex">current series</h1>
            </div>

            @include('form.result-feedback')

            <ul class="card-col mt-3">
                @foreach ($comics as $comic)
                <li class="col">
                    <div class="my-card">
                        <figure>
                            <a href="{{route('comics.show', $comic->id)}}">
                                <img src="{{$comic['thumb']}}" alt="">
                                <div id="edits">
                                    <a href="{{route('comics.edit', $comic->id)}}" class="btn">Modifica</a>
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="form-delete">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">CANCELLA</button>
                                    </form>
                                </div>
                            </a>
                        </figure>
                        <h5>
                            <a href="{{route('comics.show', $comic->id)}}">{{$comic['title']}}</a>
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

@section('script')
    @include('scripts.delete-confirmation')
@endsection