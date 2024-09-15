<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return response()->json($faqs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'faq_name' => 'required',
        ]);

        $faq = Faq::create($request->all());
        return response()->json(['message' => 'FAQ created successfully', 'faq' => $faq], 201);
    }

    public function show($id)
    {
        $faq = Faq::find($id);
        if (!$faq) {
            return response()->json(['message' => 'FAQ not found'], 404);
        }
        return response()->json($faq);
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);
        if (!$faq) {
            return response()->json(['message' => 'FAQ not found'], 404);
        }

        $request->validate([
            'faq_name' => 'required',
        ]);

        $faq->update($request->all());
        return response()->json(['message' => 'FAQ updated successfully', 'faq' => $faq]);
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        if (!$faq) {
            return response()->json(['message' => 'FAQ not found'], 404);
        }

        $faq->delete();
        return response()->json(['message' => 'FAQ deleted successfully']);
    }
}
