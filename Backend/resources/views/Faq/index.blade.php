@extends('dashboard')
@section('content_admin')
    <h1>FAQs</h1>
    <a href="{{ route('faqs.create') }}" class="btn btn-primary">Create New FAQ</a>

    <ul>
        @foreach ($faqs as $faq)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">FAQS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $faq->faq_name }}</td>
                        <td> <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </ul>
@endsection
