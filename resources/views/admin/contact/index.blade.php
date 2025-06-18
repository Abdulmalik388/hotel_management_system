@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <center><h2>Contact Messages</h2></center>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($contacts->isEmpty())
        <p>No messages yet.</p>
    @else
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d M Y') }}</td>
                    <td>
                        <form action="{{ route('admin.contacts.delete', $contact->id) }}" method="POST" onsubmit="return confirm('Delete this message?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
