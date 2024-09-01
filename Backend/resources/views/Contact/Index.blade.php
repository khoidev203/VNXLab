@extends('Dashboard')
@section('content_admin')
    <h1 class="text-center text-uppercase mt-3 mb-3">Danh Sách Liên Hệ</h1>

    <a href="{{ route('contact.create') }}" class="btn btn-outline-success mb-3 px-4 fs-6">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Title</th>
                <th>Message</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td style="padding-top: 20px">{{ $contact->id }}</td>
                    <td style="padding-top: 20px">{{ $contact->fullname }}</td>
                    <td style="padding-top: 20px">{{ $contact->email }}</td>
                    <td style="padding-top: 20px">{{ $contact->title }}</td>
                    <td style="padding-top: 20px">{{ $contact->message }}</td>
                    <td style="padding-top: 20px">{{ $contact->phone }}</td>
                    <td class="d-flex gap-3">
                        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger px-2">Delete</button>
                        </form>
                        <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-outline-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
