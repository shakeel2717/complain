
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
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="nav">
        <div class="logo">
            <h2>College</h2>
        </div>
        <div class="navigations">
            <ul class="nav-items">
                <li><a href="{{ route('admin.login') }}" class="btn btn-outline-dark">Admin</a></li>
                <li><a href="{{ route('staff.login') }}" class="btn btn-outline-dark">Staff Panel</a></li>
                <li><a href="{{ route('student.login') }}" class="btn btn-outline-dark">Login</a></li>
                <li><a href="#" class="btn btn-dark">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="parrent">
        <h2>GPGC KHAR BAJAUR</h2>
        <div class="buttons mt-4">
            <a href="{{ route('student.login') }}" class="btn btn-lg btn-primary w-100">Login</a>
            <a href="{{ route('student.register') }}" class="btn btn-lg btn-primary w-100">Create Account</a>
        </div>
    </div>
    <div class="footer">
        <p>2021 Govt Post Graduate College Khar Bajaur</p>
    </div>

</body>

</html>