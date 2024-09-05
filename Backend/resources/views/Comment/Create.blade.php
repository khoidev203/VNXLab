@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Bình luận</h1>
    <form action="{{ route('comment.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="form-body">
            <div class="form-group">
                <div class="label">
                    <label for="fullname">Comment</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="comment_text" id="fullname" placeholder="Fullname">
                   
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="email">Rating</label>
                </div>
                <div class="form-input">
                    <select class="form-select" name="rating" id="">
                        <option value="" selected>----Đánh Giá----</option>
                        <option value="1">1 Sao</option>
                        <option value="2">2 Sao</option>
                        <option value="3">3 Sao</option>
                        <option value="4">4 Sao</option>
                        <option value="5">5 Sao</option>
                    </select>
                   
                </div>
            </div>
           <input type="text" hidden name="product_id" value="1">
           {{-- <input type="text" hidden name="user_id" value="{{Auth::user()->id}}"> --}}
           <input type="text" hidden name="user_id" value="1">

            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-success">Thêm Mới</button>
            </div>
        </div>
    </form>
@endsection
