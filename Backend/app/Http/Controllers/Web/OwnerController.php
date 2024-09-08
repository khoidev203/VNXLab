<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOwnerRequest;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owner::all();

        return view('owner.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOwnerRequest $request)
    {
        $owner = $request->all();

        Owner::create($owner);

        return redirect()->route('owner.index');
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
        $owner = Owner::query()->findOrFail($id);

        return view('owner.edit',compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreOwnerRequest $request, string $id)
    {
        
        $param = $request->all();
        
        $owner = Owner::query()->findOrFail($id);

        $owner->update($param);

        return redirect()->route('owner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $owner = Owner::query()->findOrFail($id);

        $owner->delete();
        return redirect()->route('owner.index');

    }
}
