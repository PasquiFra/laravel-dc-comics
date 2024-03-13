<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{

    public function index()
    {
        $books = Comic::all();
        return view('comics.index', compact('books'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
}
