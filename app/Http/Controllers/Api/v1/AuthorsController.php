<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorsRequest;
use App\Http\Requests\UpdateAuthorsRequest;
use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        return Authors::all();
    }

     public function store(StoreAuthorsRequest $request)
    {
        return Authors::create($request->all());
    }

    public function show(Authors $authors_api)
    {
        return $authors_api;
    }

     public function update(UpdateAuthorsRequest $request, Authors $authors_api)
    {
        $authors_api->update($request->all());
        return $authors_api;
    }

    public function destroy(Authors $authors_api)
    {
        $authors_api->delete();

        return response()->json([
            "message" => "Успешно удалено!"
        ], 204);
    }
}
