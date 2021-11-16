
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
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body style="background-image: none;">
    <div class="nav">
        <div class="logo">
            <h2>User Dashboard</h2>
        </div>
        <div class="navigations">

        </div>
    </div>

    <div class="sidebar">
        <ul>
            <li><a href="{{ route('complaint.create') }}">Create Complaints</a></li>
            <li><a href="#">My Complaints</a></li>
            <li><a href="#">Complaints Details</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    @yield('content')
    <div class="footer">
        <p>2021 Govt Post Graduate College Khar Bajaur</p>
    </div>

</body>

</html>