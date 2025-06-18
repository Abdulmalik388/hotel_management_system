@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Cancelled Bookings</h2>

    @if ($bookings->isEmpty())
        <p>No cancelled bookings.</p>
    @else
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Guests</th>
                    <th>Rooms</th>
                    <th>Status</th>
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
                    <td><span class="badge bg-danger">Cancelled</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
