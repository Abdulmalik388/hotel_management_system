@extends('layouts.app') {{-- Change to your actual layout file if different --}}

@section('title', 'Privacy Policy')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Privacy Policy</h2>

    <p>We respect your privacy and are committed to protecting any personal information you provide through our website.</p>

    <h5>1. Information We Collect</h5>
    <p>We may collect personal information such as your name, email address, phone number, and any other details you provide when contacting us or making a booking.</p>

    <h5>2. How We Use Your Information</h5>
    <ul>
        <li>To respond to inquiries or service requests.</li>
        <li>To manage bookings and reservations.</li>
        <li>To improve our website and services.</li>
    </ul>

    <h5>3. Information Sharing</h5>
    <p>We do not sell, trade, or otherwise transfer your personal information to outside parties except when necessary to provide our services or when required by law.</p>

    <h5>4. Security</h5>
    <p>We implement a variety of security measures to maintain the safety of your personal information.</p>

    <h5>5. Cookies</h5>
    <p>Our website may use cookies to enhance your experience. You can choose to disable cookies through your browser settings.</p>

    <h5>6. Your Consent</h5>
    <p>By using our site, you consent to our privacy policy.</p>

    <h5>7. Changes to This Policy</h5>
    <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page.</p>

    <p class="mt-4">If you have any questions or concerns about this policy, please <a href="{{ route('pages.contact') }}">contact us</a>.</p>
</div>
@endsection
