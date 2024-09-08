@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Thêm Mới Tác Giả</h1>
    <form action="{{ route('author.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="form-body">
            <div class="form-group">
                <div class="label">
                    <label for="fullname">Author name</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="author_name" id="fullname" placeholder="Author name"  value="{{ old('author_name') }}" >
                </div>
                @error('author_name')
                <div class="mt-1">
                    <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                </div>
                @enderror
            </div>
         

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-success">Thêm Mới</button>
            </div>
        </div>
    </form>
@endsection
