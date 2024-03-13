
@php
 $comix_links=config('comix-links');   
@endphp

<footer id="footer-center">
    <div class="container flex">

        <nav class="flex ">
            <h3>dc comics</h3>
            <ul>
                @foreach ($comix_links as $c)
                <li><a href="#">{{ $c['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        <nav class="flex ">
            <h3>dc comics</h3>
            <ul>
                @foreach ($comix_links as $c)
                <li><a href="#">{{ $c['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        <nav class="flex ">
            <h3>dc comics</h3>
            <ul>
                @foreach ($comix_links as $c)
                <li><a href="#">{{ $c['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        <nav class="flex ">
            <h3>dc comics</h3>
            <ul>
                @foreach ($comix_links as $c)
                <li><a href="#">{{ $c['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        <nav class="flex ">
            <h3>dc comics</h3>
            <ul>
                @foreach ($comix_links as $c)
                <li><a href="#">{{ $c['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>

    </div>
</footer>
