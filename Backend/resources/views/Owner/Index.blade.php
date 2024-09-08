@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Danh Sách Người Sở Hữu</h1>

    <a href="{{ route('owner.create') }}" class="btn btn-outline-success mb-3 px-4 fs-6">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($owners as $key => $item)
                <tr>
                    <td style="padding-top: 20px">{{ $key+1 }}</td>
                    <td style="padding-top: 20px">{{ $item->fullname }}</td>
                    <td style="padding-top: 20px">{{ $item->email }}</td>
                    <td style="padding-top: 20px">{{ $item->phone }}</td>
                    
                    <td class="d-flex gap-3">
                        <form action="{{ route('owner.destroy', $item->id) }}" method="POST" onsubmit="return confirm('bạn có muốn xóa không')">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger px-2">Delete</button>
                        </form>
                        <a href="{{ route('owner.edit', $item->id) }}" class="btn btn-outline-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
