@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Add New Room</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label>Room Number</label>
            <input type="text" name="room_number" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Room Type</label>
            <select name="room_type" class="form-control" required>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Suite">Suite</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="available">Available</option>
                <option value="booked">Booked</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Room Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Room</button>
    </form>
</div>
@endsection
