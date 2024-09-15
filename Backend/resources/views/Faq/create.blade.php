@extends('dashboard')
@section('content_admin')
<h1>Create New FAQ</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('faqs.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="faq_name">FAQ Name:</label>
        <input type="text" name="faq_name" class="form-control" id="faq_name" value="{{ old('faq_name') }}">
    </div>

    <button type="submit" class="btn btn-success">Create FAQ</button>
</form>
@endsection