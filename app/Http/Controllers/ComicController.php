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

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'string',
            'thumb' => 'url:http,https',
            'price' => 'string',
            'series' => 'required|string',
            'type' => 'required|string',
            'sale_date' => 'required|date',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        $data = $request->all();

        $new_comic = new Comic();
        /*
        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->type = $data['type'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->artists = $data['artists'];
        $new_comic->writers = $data['writers'];
        */

        $new_comic->fill($data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->id);
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }
}
