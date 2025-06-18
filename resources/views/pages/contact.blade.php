@extends('layouts.app')
@section('content')
<!-- Contact Section Begin --> 
 <center>
        <h1>Contact Us</h1>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
    <div class="form-group">    
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
</center>
    <!-- Contact Section End -->
     @endsection