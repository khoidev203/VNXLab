<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();

        return view('author.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $params = $request->all();

        Author::create($params);

        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::query()->findOrFail($id);

        return view('author.edit',compact('author'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAuthorRequest $request, string $id)
    {
        $params = $request->all();

        $author = Author::query()->findOrFail($id);

       $author->update($params);
       return redirect()->route('author.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::query()->findOrFail($id);

        $author->delete();
       return redirect()->route('author.index');

    }
}
