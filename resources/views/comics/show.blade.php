
@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')
    <section id="show-comics">
        <div class="stripe"></div>
        <div class="flex container">
            <div id="current-series">
                <figure>
                    <img src="{{$comic->thumb}}" alt="">
                    <span class="add-1">COMIC BOOK</span>
                    <span class="add-2">VIEW GALLERY</span>
                    <a href="{{route('comics.edit', $comic->id)}}">Modifica</a>
                </figure>
            </div>
            <div class="flex space-between width-full">
                <div id="comic-content">
                    <h2>{{$comic->title}}</h2>
                    <div id="info" class="flex space-between">
                        <div class="price flex space-between">
                            <div>
                                U.S. Price: <span>{{$comic->price}}</span>
                            </div>
                            <div>AVAILABLE</div>
                        </div>
                        <div class="available flex center">
                            <div class="check-available">Check availability</div>
                        </div>
                    </div>
                    <p> {{$comic->description}} </p>
                </div>
                <div id="adv">
                    <img src=" {{Vite::asset('/resources/img/adv.jpg')}} " alt="DC POWER VISA">
                </div>
            </div>
            <div id="main-bottom" class="flex space-between">
                <div id="authors">
                    <h3>Talent</h3>
                    <div id="artists" class="flex space-between">
                        <div>
                            Art by:
                        </div>
                        <div class="content">
                            <a href="#">{{$comic->artists}}</a>
                        </div>
                    </div>
                    <div id="writers" class="flex space-between">
                        <div>
                            Written by:
                        </div>
                        <div class="content">
                            
                            <a href="#">{{$comic->writers}}</a>
                        </div>
                    </div>
                </div>
                <div id="specs">
                    <h3>Specs</h3>
                    <div>
                        <span>Series: </span> 
                        <span>
                            <a href="#">{{$comic->series}}</a>
                        </span>
                    </div>
                    <div>
                        <span>U.S. Price: </span>
                        <span>{{$comic->price}}</span>
                    </div>
                    <div>
                        <span>On Sale Date: </span>
                        <span>{{$comic->sale_date}}</span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection
