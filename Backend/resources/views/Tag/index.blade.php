@extends('dashboard')
@section('content_admin')
<h1>Danh sách Tags</h1>

<a href="{{ route('tags.create') }}" class="btn btn-primary">Tạo Tag mới</a>

@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<ul>
    @foreach ($tags as $tag)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tag name</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{ $tag->tag_name }}</td>
            <td> <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Xóa</button>
            </form></td>
          </tr>
        </tbody>
      </table>
    @endforeach
</ul>
@endsection