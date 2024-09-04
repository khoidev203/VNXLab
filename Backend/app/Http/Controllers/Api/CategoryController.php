<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreCategoryRequest as ApiStoreCategoryRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Category::query()->latest('id')->paginate(5);
        return response()->json([
            'message' => 'Danh sách danh mục trang ' . $request->get('page', 1),
            'data' => $data
        ]);
    }
    public function store(ApiStoreCategoryRequest $request)
    {
        $categories = Category::query()->create($request->all());
        return response()->json([
            'message' => 'Tạo mới thành công danh mục',
            'data' => $categories
        ], Response::HTTP_CREATED); //201
    }
    public function show(string $id)
    {
        try {
            $data = Category::query()->findOrFail($id);
            return response()->json([
                'message' => 'Chi tiết danh mục id = ' . $id,
                'data' => $data
            ]);
        } catch (\Throwable $th) {
            //tạo ra laravel.log ở storage khi chạy postman lỗi code 500
            Log::error(__CLASS__ . '@' . __FUNCTION__, [
                'line' => $th->getLine(),
                'message' => $th->getMessage(),
                'trace' => $th->getTraceAsString(),
            ]);
            if ($th instanceof ModelNotFoundException) {
                return response()->json([
                    'message' => 'Không tìm thấy danh mục có id = ' . $id,

                ], Response::HTTP_NOT_FOUND); //404
            }
            return response()->json([
                'message' => 'Không tìm thấy danh mục có id = ' . $id,

            ], Response::HTTP_INTERNAL_SERVER_ERROR);//lỗi code 500
        }
    }
    public function update(Request $request, $id)
    {
        $categories = Category::query()->findOrFail($id);
        $categories->update(request()->all());
        return response()->json($categories);
    }
    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json([
            'message' => 'Xóa thành công danh mục có id = ' . $id,

        ], Response::HTTP_OK); //200
    }
}
