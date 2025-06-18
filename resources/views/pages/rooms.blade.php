@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Available Rooms</h2>

    <div class="row">
        @forelse ($rooms as $room)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $room->image) }}" class="card-img-top" alt="Room Image" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Room {{ $room->room_number }}</h5>
                        <p><strong>Type:</strong> {{ ucfirst($room->room_type) }}</p>
                        <p><strong>Price:</strong> ₦{{ number_format($room->price, 0) }}</p>
                        <p><strong>Status:</strong> 
                            @if ($room->status == 'available')
                                <span class="badge bg-success">Available</span>
                            @else
                                <span class="badge bg-danger">Not Available</span>
                            @endif
                        </p>
                        <a href="{{ route('pages.booking') }}" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No rooms available at the moment.</p>
        @endforelse
    </div>
</div>
@endsection
