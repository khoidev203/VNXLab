@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Thêm Mới Người Sở Hữu</h1>
    <form action="{{ route('owner.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="form-body">
            <div class="form-group">
                <div class="label">
                    <label for="fullname">Full name</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Author name"  value="{{ old('fullname') }}" >
                </div>
                @error('fullname')
                <div class="mt-1">
                    <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                </div>
                @enderror

                <div class="label">
                    <label for="fullname">Email</label>
                </div>
                <div class="form-input">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"  value="{{ old('email') }}" >
                </div>
                @error('email')
                <div class="mt-1">
                    <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                </div>
                @enderror

                <div class="label">
                    <label for="fullname">Phone</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"  value="{{ old('phone') }}" >
                </div>
                @error('phone')
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
