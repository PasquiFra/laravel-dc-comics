
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics | @yield('title')</title>

    {{-- Importo Bootstrap e Scss --}}
    @vite('resources/js/app.js')
    
</head>
<body>
    {{-- Riferimento all'Header --}}
    @include('components.header')

    {{-- MAIN CONTENT --}}
    <main>
        @yield('main-content')
    </main>

    {{-- Riferimento al Footer-Top --}}
        @include('components.footer-top')
    
    {{-- Riferimento al Footer-Center --}}
        @include('components.footer-center')
    
    {{-- Riferimento al Footer-Bottom --}}
        @include('components.footer-bottom')
    
</body>
</html>