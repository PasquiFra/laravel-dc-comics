<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}

class ComicsController extends Controller
{
    public function __invoke()
    {
        return view('comics');
    }
}

class ShowProductController extends Controller
{
    public function __invoke($index)
    {
        $comics = config('comics');
        foreach ($comics as $i => $c) {
            if ($i == $index) $comic = $c;
        };

        return view('products.show', compact('comic'));
    }
}
