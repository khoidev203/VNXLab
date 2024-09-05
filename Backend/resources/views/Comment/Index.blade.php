@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Danh Sách Comment</h1>

    <a href="{{ route('comment.create') }}" class="btn btn-outline-success mb-3 px-4 fs-6">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Comment</th>
                <th>Rate</th>
                <th>Tên sản phẩm</th>
                <th>Tên Người bình luận</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comment as $key => $item)
                <tr>
                    
                    
                    
                    <td style="padding-top: 20px">{{ $key+1 }}</td>
                    <td style="padding-top: 20px">{{ $item->comment_text }}</td>
                    <td style="padding-top: 20px">{{ $item->rating }} <i class="fa-solid fa-star"></i></td>
                    <td style="padding-top: 20px">{{ $item->product->title }}</td>
                    <td style="padding-top: 20px">{{ $item->user->name }}</td>
                    <td class="d-flex gap-3">
                        <form action="{{ route('comment.destroy', $item->id) }}" method="POST" onsubmit="return confirm('bạn có muốn xóa không')">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger px-2">Delete</button>
                        </form>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
