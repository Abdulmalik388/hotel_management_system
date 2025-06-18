@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Edit Room</h2>

    <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Room Number</label>
            <input type="text" name="room_number" class="form-control" value="{{ $room->room_number }}" required>
        </div>

        <div class="form-group">
            <label>Room Type</label>
            <input type="text" name="room_type" class="form-control" value="{{ $room->room_type }}" required>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="available" {{ $room->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="booked" {{ $room->status == 'booked' ? 'selected' : '' }}>Booked</option>
            </select>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" value="{{ $room->price }}" required>
        </div>

        <div class="form-group">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control">
            @if($room->image)
                <img src="{{ asset('storage/' . $room->image) }}" width="150" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-success mt-3">Update Room</button>
    </form>
</div>
@endsection
