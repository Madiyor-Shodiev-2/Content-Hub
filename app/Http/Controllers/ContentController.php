<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;
use App\Models\Content;
use App\Models\Category;
use App\Models\Authors;
use App\Models\Genre;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Content::all();
        return view('main.admin.contents.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contents = Content::with([
            'authors:id,name',
            'category:id,name',
            'genres:id,name'
        ])->get();

        $categories = Category::all();
        $authors    = Authors::all();
        $genres     = Genre::all();

        return view('main.admin.contents.create', compact('contents', 'categories','authors','genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContentRequest $request)
    {
        $data = $request->all();

        $genres = $data['genres'];
        $authors = $data['authors'];

        $content = Content::create([
            'title'       => $data['title'],
            'description' => $data['description'],
            'url'         => $data['url'],
            'category_id' => $data['category_id']
        ]);

        $content->authors()->attach($authors);
        $content->genres()->attach($genres);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        return view('main.admin.contents.show', [
            'content' => $content
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContentRequest $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        $content->delete();
        return redirect()->back();
    }
}
