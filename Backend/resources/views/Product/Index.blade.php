@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Danh Sách Liên Hệ</h1>

    <a href="{{ route('product.create') }}" class="btn btn-outline-success mb-3 px-4 fs-6">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Summary</th>
                <th>keywords</th>
                <th>Title</th>
                <th>Tags</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td style="padding-top: 20px">{{ $product->id }}</td>
                    <td style="padding-top: 20px">{{ $product->summary }}</td>
                    <td style="padding-top: 20px">{{ $product->keywords }}</td>
                    <td style="padding-top: 20px">{{ $product->title }}</td>
                    <td style="padding-top: 20px">
                        @foreach ($product->tags as $tag)
                            {{ $tag->tag_name }}
                        @endforeach
                    </td>
                    <td>
                        @if ($product->file_url)
                            <img src="{{ asset('storage/' . $product->file_url) }}" alt="{{ $product->title }}"
                                width="100">
                        @endif
                    </td>
                    <td class="d-flex gap-3">
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger px-2"
                                onclick="return confirm('Bạn có muốn xóa không?')">Delete</button>
                        </form>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
