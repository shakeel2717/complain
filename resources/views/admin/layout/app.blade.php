
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management System</title>
    <!-- Bootstrap Ka Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- Font Awsome ka Link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- Hamri CSS ki File -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body style="background-image: none;">
    <div class="nav">
        <div class="logo">
            <h2>Admin Dashboard</h2>
        </div>
        <div class="navigations">

        </div>
    </div>

    <div class="sidebar">
        <ul>
            <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.officer') }}">Officers wise</a></li>
            <li><a href="{{ route('admin.createStudent') }}">Create Student</a></li>
            <li><a href="{{ route('admin.teacher') }}">Teacher Wise</a></li>
            <li><a href="{{route('admin.totalComplaints')}}">Total Complaints</a></li>
            <li><a href="{{ route('admin.login') }}">Logout</a></li>
        </ul>
    </div>
    @yield('content')
    <div class="footer">
        <p>2021 Govt Post Graduate College Khar Bajaur</p>
    </div>

</body>

</html>