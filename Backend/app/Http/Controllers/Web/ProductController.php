<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $tags = Tag::all();
        $authors = Author::all();
        $categories = Category::all();
        return view('product.create', compact('tags', 'authors', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->except('image');
        $data['image'] = '';

        // Xử lý upload ảnh
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['file_url'] = $imagePath;
        }

        // Tạo mới sản phẩm
        $product = Product::create($data);

        // Gắn các tag vào sản phẩm
        $product->tags()->sync($request->tags);

        return redirect()->route('product.index')->with('success', 'Product added successfully.');
    }
}
