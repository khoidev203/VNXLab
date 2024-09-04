@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Danh Sách Danh Mục</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td style="padding-top: 20px">{{ $category->id }}</td>
                    <td style="padding-top: 20px">{{ $category->category_name }}</td>
                    <td class="d-flex gap-3">
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger px-2"
                                onclick="return confirm('Bạn có muốn xóa không?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $categories->links() }}
    </div>
@endsection
