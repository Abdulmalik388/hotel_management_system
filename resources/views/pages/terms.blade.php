
@extends('layouts.app') {{-- Change to your actual layout file name --}}

@section('title', 'Terms of Use')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Terms of Use</h2>
    
    <p>Welcome to our website. By accessing or using our services, you agree to be bound by the following terms and conditions:</p>

    <h5>1. Acceptance of Terms</h5>
    <p>By using our website, you confirm that you accept these terms and that you agree to comply with them. If you do not agree, please do not use our services.</p>

    <h5>2. Use of Website</h5>
    <ul>
        <li>You may use our website for lawful purposes only.</li>
        <li>You must not misuse our site by introducing viruses or other harmful material.</li>
        <li>Unauthorized use may give rise to a claim for damages and/or be a criminal offense.</li>
    </ul>

    <h5>3. Intellectual Property</h5>
    <p>All content on this site, including text, graphics, logos, and images, is the property of the website owner and protected by copyright laws.</p>

    <h5>4. Limitation of Liability</h5>
    <p>We are not responsible for any losses or damages caused by using this website or relying on the information provided on it.</p>

    <h5>5. Changes to Terms</h5>
    <p>We may revise these terms at any time. You are expected to check this page regularly to take notice of any changes.</p>

    <h5>6. Governing Law</h5>
    <p>These terms are governed by and construed in accordance with the laws of your local jurisdiction.</p>

    <p class="mt-4">If you have any questions about our Terms of Use, please <a href="{{ route('pages.contact') }}">contact us</a>.</p>
</div>
@endsection
