<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('main.admin.genres.index', compact('genres'));
    }
    public function create()
    {
        $genres = Genre::all();

        return view('main.admin.genres.create', compact('genres'));
    }
    public function store(StoreGenreRequest $request)
    {
        $data = $request->all();
        $genre = new Genre();
        $genre->name = $data['name'];
        $genre->save();

        return redirect()->route('admin.genres.show', $genre->id);
    }
    public function show(Genre $genre)
    {  
        return view('main.admin.genres.show', compact('genre'));
    }
    public function edit(Genre $genre)
    {
        session(['previous_url' => url()->previous()]);
        
        return view('main.admin.genres.edit', compact('genre'));
    }
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        $data = $request->all();
        $genre->name = $data['name'];
        $genre->update();

        return redirect()->route('admin.genres.show', $genre->id);
    }
    public function destroy(Genre $genre)
    {
        $genre->deleteOrFail();
        
        return redirect()->back();
    }
}
