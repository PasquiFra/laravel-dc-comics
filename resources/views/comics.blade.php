
@php
 $books=config('comics');   
@endphp

@extends('layouts.layout')

@section('title', 'Home')

@section('main-content')
    <section id="main-comics">
        <div class="flex container">
            <div id="current-series">
                <h1 class="flex">current series</h1>
            </div>
            <ul class="card-col">
                @foreach ($books as $i => $b)
                @php dump($b) @endphp
                <li class="card">
                    <figure>
                        <a href="{{route('show', $loop->index)}}">
                            <img src="{{$b['thumb']}}" alt="">
                        </a>
                    </figure>
                    <h5>
                        <a href="{{route('show', $loop->index)}}">{{$b['title']}}</a>
                    </h5>
                </li>
                @endforeach
            </ul>
            <div id="load-more" class="flex center">
                <a class="btn" href="#">load more</a>
            </div>
        </div>
    </section>
@endsection
