@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Thêm Mới ...</h1>
    <form action="{{ route('author.update', $author->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-body">
            <div class="form-group">
                <div class="label">
                    <label for="fullname">Author name</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="author_name" id="fullname" placeholder="Fullname" value="{{ $author->author_name }}"> 
                </div>
            </div>
        

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-success">Cập nhật</button>
            </div>
        </div>
    </form>
@endsection
