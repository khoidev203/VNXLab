<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::all();
        return view('comment.index', compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->all();

        // $comment = Comment::create([
        //     'comment_text' =>$request->input('comment_text') ,
        //     'rating' =>$request->input('rating') ,
        //     'product_id' => $request->input('product_id') ,
        //     'user_id' =>$request->input('user_id') ,
        // ]);

        Comment::create($params);

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commentProduct = Comment::query()->where('product_id','=',$id)->get();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::query()->findOrFail($id);
       $comment->delete($id);

       return redirect()->route('comment.index');   
    }
}
