@extends('dashboard')
@section('content_admin')
<h1>Chỉnh sửa Tag</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="tag_name">Tên Tag:</label>
        <input type="text" name="tag_name" value="{{ $tag->tag_name }}" required>

        <button type="submit" class="btn btn-success">Cập nhật</button>
    </form>
@endsection