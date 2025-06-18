@extends('layouts.app')

@section('content')
    
         <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Booking Your Hotel</h3>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form action="{{ route('booking.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" name="name" class="form-control input" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" name="email" class="form-control input" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" name="phone" class="form-control input" required>
                            </div>

                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="date" name="check_in" class="form-control" required>
                            </div>

                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="date" name="check_out" class="form-control " required>
                            </div>

                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select name="guests" class="form-control" required>
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                </select>
                            </div>

                            <div class="select-option">
                                <label for="room">Rooms:</label>
                                <select name="rooms" class="form-control" required>
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-secondary mt-3">Book Now</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection