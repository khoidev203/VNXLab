<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Owner::all();
    }

   
    public function store(Request $request)
    {
        $params = $request->validate([
            'fullname' =>'required|string:255',
            'email' =>'required|email|max:255',
            'phone' =>'required|string|max:10',
        ]);

        Owner::create($params);

        return response()->json($params, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Owner::query()->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $params = $request->validate([
            'fullname' =>'required|string:255',
            'email' =>'required|email|max:255',
            'phone' =>'required|string|max:10',
        ]);

        $owner = Owner::query()->findOrFail($id);

       $owner->update($params);
       return response()->json($owner, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $owner = Owner::query()->findOrFail($id);

        $owner->delete();
        return response()->json([
            'message' => 'xóa thành công'
        ], 204);
       
    }
}
