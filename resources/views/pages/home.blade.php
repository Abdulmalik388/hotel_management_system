@extends('layouts.app')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Sona A Luxury Hotel</h1>
                        <p>Here are the best hotel booking sites, including recommendations for international
                            travel and for finding low-priced hotel rooms.</p>
                        <a href="{{ route('pages.rooms') }}" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">


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

                    <section class="book-now-section py-5 bg-light text-center">
                        <div class="container">
                            <h2 class="mb-3">Ready to Experience Comfort?</h2>
                            <p class="mb-4">Book your stay with us today and enjoy luxury at its finest.</p>
                            <a href="{{ route('pages.booking') }}" class="btn btn-primary btn-lg">Book Now</a>
                        </div>
                    </section>




                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <!-- Text Content -->
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Welcome to Intercontinental LA<br />Westlake Hotel</h2>
                        </div>
                        <p class="f-para">
                            Nestled in the heart of the city, Intercontinental LA Westlake Hotel offers a unique blend
                            of modern comfort and timeless elegance. Our hotel is known for providing world-class
                            hospitality, luxurious accommodations, and exceptional service to every guest.
                        </p>
                        <p class="s-para">
                            Whether you're here for business, leisure, or a romantic getaway, we have the perfect room
                            for you — from elegant single rooms to spacious suites. Enjoy on-site dining, a relaxing
                            spa, high-speed internet, and stunning city views. At Intercontinental LA, your comfort is
                            our top priority.
                        </p>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <img src="img/about/about-1.jpg" alt="Hotel Interior" class="img-fluid rounded">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <img src="img/about/about-2.jpg" alt="Hotel Room" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- About Us Section End -->

    <!-- Services Section End -->
    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Travel Assistance -->
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Travel Assistance</h4>
                        <p>From airport pickups to guided tours, our team is here to help you plan and enjoy a smooth,
                            memorable trip.</p>
                    </div>
                </div>

                <!-- Catering Service -->
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>Enjoy gourmet meals crafted by our in-house chefs, available for private events, room service,
                            and special occasions.</p>
                    </div>
                </div>

                <!-- Babysitting -->
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Babysitting</h4>
                        <p>Our certified babysitters are available on request, allowing parents to relax and enjoy their
                            stay with peace of mind.</p>
                    </div>
                </div>

                <!-- Laundry -->
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry & Dry Cleaning</h4>
                        <p>Keep your wardrobe fresh with our same-day laundry and dry cleaning services, available daily for
                            all guests.</p>
                    </div>
                </div>

                <!-- Chauffeur Service -->
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Chauffeur Service</h4>
                        <p>Need a ride around town? Book our professional drivers for safe and stylish transportation
                            anywhere you need to go.</p>
                    </div>
                </div>

                <!-- Bar & Drinks -->
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Lounge</h4>
                        <p>Relax in our elegant bar with a wide selection of wines, cocktails, and non-alcoholic beverages,
                            served daily till late.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Services Section End -->

<!-- Home Room Section Begin -->
<section class="hp-room-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-uppercase text-muted">Our Rooms</h6>
            <h2 class="display-5 fw-bold">Choose Your Perfect Stay</h2>
            <p class="text-muted">Luxury, comfort, and style — crafted just for you.</p>
        </div>

        <div class="row g-4">
            @foreach($rooms as $room)
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('storage/' . $room->image) }}" class="card-img-top room-img" alt="{{ $room->title }}">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="card-title mb-0">{{ $room->title }}</h5>
                            <a href="{{ route('pages.booking', $room->id) }}" class="btn btn-sm  btn-primary">Book Now</a>
                        </div>
                        <p class="card-text text-muted">{{ Str::limit($room->description, 100) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('pages.rooms') }}" class="btn btn-outline-success btn-lg">View All Rooms</a>
        </div>
    </div>
</section>



    <section class="testimonial-section spad bg-light text-center">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span class="text-primary">Testimonials</span>
                        <h2 class="fw-bold">What Our Customers Say</h2>
                        <p class="text-muted">Real stories from guests who enjoyed their stay with us.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-slider owl-carousel">
                        <!-- Testimonial 1 -->
                        <div class="ts-item bg-white shadow p-4 rounded">
                            <p class="fst-italic">
                                “Absolutely amazing service and cozy rooms! I felt at home from the moment I checked in. The
                                staff are professional and friendly.”
                            </p>
                            <div class="mt-3">
                                <h5 class="mb-0">Olivia Adebayo</h5>
                                <small class="text-muted">Toronto, Canada</small>
                                <div class="rating text-warning mt-1">★★★★☆</div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="ts-item bg-white shadow p-4 rounded">
                            <p class="fst-italic">
                                “Perfect place for both work and relaxation. Great Wi-Fi, great food, and even better
                                hospitality. Will definitely return!”
                            </p>
                            <div class="mt-3">
                                <h5 class="mb-0">Darius Obi</h5>
                                <small class="text-muted">Lagos, Nigeria</small>
                                <div class="rating text-warning mt-1">★★★★★</div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="ts-item bg-white shadow p-4 rounded">
                            <p class="fst-italic">
                                “Peaceful environment, comfortable rooms, and everything was super clean. Booking was easy
                                and the stay was unforgettable.”
                            </p>
                            <div class="mt-3">
                                <h5 class="mb-0">Emily Zhang</h5>
                                <small class="text-muted">Vancouver, Canada</small>
                                <div class="rating text-warning mt-1">★★★★☆</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h2>Our Blog & Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Travel Trip</span>
                            <h4><a href="#">Tremblant In Canada</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 23rd March, 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Camping</span>
                            <h4><a href="#">Choosing A Static Caravan</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 19th june, 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-3.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Copper Canyon</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 21th May, 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-wide.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-10.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Travel</span>
                            <h4><a href="#">Traveling To Barcelona</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2025</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection