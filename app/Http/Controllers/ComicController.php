<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create', ['comic' => new Comic]);
    }

    public function store(Request $request)
    {
        $data = $request->validated();

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

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }

    private function validateFields($data)
    {
    }
}
