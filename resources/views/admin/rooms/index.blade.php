@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>All Rooms</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Room Number</th>
                <th>Type</th>
                <th>Status</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->room_type }}</td>
                <td>{{ $room->status }}</td>
                <td>{{ $room->price }}</td>
                <td>
                    @if($room->image)
                        <img src="{{ asset('storage/' . $room->image) }}" width="100" alt="Room Image">
                    @else
                        No image
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.rooms.edit', $room->id) }}" class="btn btn-sm btn-primary">Edit</a>

                    <form action="{{ route('admin.rooms.delete', $room->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this room?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
