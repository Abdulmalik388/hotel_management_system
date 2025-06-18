<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- Google Font -->
   <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<style>
    .form-control {
        width: 35%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .input{
       width:100% 
    }
    .book-now-section {
    background-color: #f8f9fa;
    padding: 60px 20px;
}

.book-now-section h2 {
    font-size: 2.5rem;
    font-weight: 700;
}

.book-now-section p {
    font-size: 1.2rem;
    color: #555;
}

.book-now-section .btn {
    padding: 12px 30px;
    font-size: 1.1rem;
    border-radius: 50px;
    
}
.room-img {
    height: 220px;
    object-fit: cover;
}
.btn-primary{
    width: 100%;
}
</style>
</head>
 <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="{{ route('admin.bookings') }}" class="bk-btn">Booking Now</a>
        </div>
        
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i>(+234) 8081168026 </li>
            <li><i class="fa fa-envelope"></i> abdulmaliklawal388@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (+234) 8081168026</li>
                            <li><i class="fa fa-envelope"></i> abdulmaliklawal388@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="{{ route('pages.booking') }}" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <img src="img/flag.jpg" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ route('pages.welcome') }}">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="{{ route('pages.welcome') }}">Home</a></li>
                                    <li><a href="{{ route('pages.rooms') }}">Rooms</a></li>
                                    <li><a href="{{ route('pages.about') }}">About Us</a></li>
                                    <li><a href="{{ route('admin.login') }}">Admin</a></li>
                                  
                                  
                                    <li><a href="{{ route('pages.contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if (session('success'))
<script>
    window.onload = function () {
        const toast = document.createElement('div');
        toast.innerText = "{{ session('success') }}";
        toast.style.position = 'fixed';
        toast.style.top = '20px';
        toast.style.right = '20px';
        toast.style.background = '#28a745';
        toast.style.color = 'white';
        toast.style.padding = '12px 20px';
        toast.style.borderRadius = '5px';
        toast.style.boxShadow = '0 0 10px rgba(0,0,0,0.2)';
        toast.style.zIndex = 9999;
        document.body.appendChild(toast);

        setTimeout(() => {
            toast.remove();
        }, 4000);
    };
</script>
@endif

    <!-- Header End -->
