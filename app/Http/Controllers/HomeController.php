<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Category;
use App\Models\Comment;

class HomeController extends Controller
{

    public function index()
    {
        $videos = Content::where('category_id', 1)->get();

        return view('main.users.index', [
            'videos' => $videos,
        ]);
    }

    public function test()
    {
        $relatedContent = Content::where('category_id', 1)
            ->where('id', '!=', 1)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('main.users.test',[
            'relatedContent' => $relatedContent,
            'category' => Category::find(1),
            'content' => Content::find(1),
            'comments' => Comment::all(),
        ]);
    }


    public function adminIndex()
    {
        return redirect()->route('admin.authors.index');
    }
}
