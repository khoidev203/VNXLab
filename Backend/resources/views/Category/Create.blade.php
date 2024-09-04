@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-upppercase mt-3 mb-3">Thêm mới ...</h1>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-body">
            <div class="form-group">
                <div class="label">
                    <label for="category_name">Category Name</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Nhập tên danh mục...">
                    @error('category_name')
                        <div class="mt-1">
                            <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-success">Thêm Mới</button>
            </div>
        </div>
    </form>
@endsection
