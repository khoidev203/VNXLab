<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::query()->latest('id')->paginate(5);
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();

        Category::create($validated);
        return redirect()->route('category.index');
    }
    public function show($id)
    {
        $contact = Category::findOrFail($id);
        return view('category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(StoreCategoryRequest $request, $id)
    {
        $validated = $request->validated();
        $category = Category::findOrFail($id);
        $category->update($validated);
        return redirect()->route('category.index');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
