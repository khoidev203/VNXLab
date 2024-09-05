@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Thêm Mới ...</h1>
    <form action="{{ route('product.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="form-body">
            <div class="form-group">
                <div class="label">
                    <label for="fullname">Summary</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="summary" id="summary" placeholder="Summary">
                    {{-- @error('summary')
                        <div class="mt-1">
                            <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror --}}
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="keywords">Keyword</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="keywords" id="keywords" placeholder="Keyword">
                    {{-- @error('summary')
                        <div class="mt-1">
                            <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror --}}
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="phone">Title</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                    {{-- @error('title')
                        <div class="mt-1">
                            <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror --}}
                </div>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select id="tags" name="tags[]" class="form-select" required>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="file_url">Image</label>
                <input type="file" class="form-control" name="file_url" id="file_url">
            </div>
            <div class="form-group">
                <label for="author_id">Author</label>
                <select id="author_id" name="author_id" class="form-select" required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select id="category_id" name="category_id" class="form-select" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-success">Thêm Mới</button>
            </div>
        </div>
    </form>
@endsection
