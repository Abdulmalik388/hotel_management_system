<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional custom CSS (you can create public/css/admin.css) -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", sans-serif;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding: 20px;
        }

        .sidebar h4 {
            color: white;
        }

        .sidebar .nav-link {
            color: #ccc;
            margin-bottom: 10px;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: #495057;
            color: white;
        }

        .main-content {
            margin-left: 260px;
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2 class="text-white"> Dashboard</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">Dashboard Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.rooms') }}">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('admin.rooms.create') }}>Add Room</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.bookings') }}">All Bookings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.bookings.confirmed') }}">Confirmed Bookings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.bookings.cancelled') }}">Cancelled Bookings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.contacts') }}">Contact Messages</a>
            </li>


            </li>
           
            <li class="nav-item">
                <a class="nav-link text-danger" href="/admin/logout">Logout</a>
            </li>
        </ul>
    </div>


    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Bootstrap JS (optional, for dropdowns or modals if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>