@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>All Bookings</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($bookings->isEmpty())
        <p>No bookings available.</p>
    @else
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Guests</th>
                    <th>Rooms</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>{{ $booking->guests }}</td>
                    <td>{{ $booking->rooms }}</td>
                    <td>
                        @if ($booking->status == 'confirmed')
                            <span class="badge bg-success">Confirmed</span>
                        @elseif ($booking->status == 'cancelled')
                            <span class="badge bg-danger">Cancelled</span>
                        @else
                            <span class="badge bg-secondary">Pending</span>
                        @endif
                    </td>
                    <td>
                        @if ($booking->status == 'pending')
                            <a href="{{ route('admin.bookings.confirm', $booking->id) }}" class="btn btn-sm btn-success">Confirm</a>
                            <a href="{{ route('admin.bookings.cancel', $booking->id) }}" class="btn btn-sm btn-warning">Cancel</a>
                        @endif
                        <form action="{{ route('admin.bookings.delete', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
