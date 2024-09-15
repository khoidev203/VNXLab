@extends('dashboard')
@section('content_admin')
<h1>Tạo Tag Mới</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('tags.store') }}" method="POST">
    @csrf
    <label for="tag_name">Tên Tag:</label>
    <input type="text" name="tag_name" required>

    <button type="submit" class="btn btn-success">Tạo</button>
</form>
@endsection