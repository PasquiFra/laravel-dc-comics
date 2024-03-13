
@php
 $navs=config('links');   
@endphp


<header>
    <div class="container flex center">
        <figure>
            <a href="{{url('/')}}"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo"></a>
        </figure>
        <nav class="flex">
            <ul class="flex">
                @foreach ( $navs as $nav)  
                <li class="flex center list-setup">
                    <a class="link-setup flex center" href="{{$nav['text'] === 'Comics' ? route(strtolower($nav['text'])) : '#'}}">
                        {{$nav['text']}}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>

<div class="background">
</div>
