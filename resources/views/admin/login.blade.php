<!DOCTYPE html>
<html>
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login</title>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Admin Login</h4>
                </div>
<div class="card-body">
    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
      <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>
</body>
</html>
