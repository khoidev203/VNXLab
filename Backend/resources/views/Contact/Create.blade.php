@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Thêm Mới ...</h1>
    <form action="{{ route('contact.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="form-body">
            <div class="form-group">
                <div class="label">
                    <label for="fullname">Fullname</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname">
                    @error('fullname')
                        <div class="mt-1">
                            <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="email">Email</label>
                </div>
                <div class="form-input">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    @error('email')
                        <div class="mt-1">
                            <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="phone">Title</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                    @error('title')
                        <div class="mt-1">
                            <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="message">Message</label>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control" name="message" id="message" placeholder="Message">
                    @error('message')
                        <div class="mt-1">
                            <span style="font-size: 14px" class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="phone">Phone</label>
                </div>
                <div class="form-input">
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone">
                    @error('phone')
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
