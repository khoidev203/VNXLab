<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Hiển thị danh sách tất cả các tag
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    // Hiển thị form tạo mới tag
    public function create()
    {
        return view('tag.create');
    }

    // Lưu tag mới
    public function store(Request $request)
{
    $request->validate([
        'tag_name' => 'required|string|max:255|unique:tags', // Xác thực unique
    ]);

    Tag::create($request->all());

    return redirect()->route('tags.index')
        ->with('success', 'Tag created successfully.');
}

    // Hiển thị form chỉnh sửa tag
    public function edit(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }

    // Cập nhật tag
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'tag_name' => 'required|string|max:255',
        ]);

        $tag->update($request->all());

        return redirect()->route('tags.index')
            ->with('success', 'Tag updated successfully.');
    }

    // Xóa tag
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')
            ->with('success', 'Tag deleted successfully.');
    }
}
