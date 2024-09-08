<?php

namespace App\Http\Controllers\Api;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Author::all();

      
    }

    /**
     * Show the form for creating a new resource.
     */
   
    public function store(Request $request)
    {
        $params = $request->validate([
            'author_name' => 'required|string|max:50',
        ]);

        Author::create($params);

        return response()->json($params, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Author::query()->findOrFail($id);

       
    }

    
    public function update(Request $request, string $id)
    {
        $params = $request->validate([
            'author_name' => 'required|string|max:50',
        ]);

        $author = Author::query()->findOrFail($id);

       $author->update($params);
       return response()->json($author, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $author = Author::query()->findOrFail($id);

        $author->delete();
        return response()->json([
            'message' => 'xóa thành công'
        ], 204);
    }
}
