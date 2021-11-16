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
            <h2>Admin Dashboard</h2>
        </div>
        <div class="navigations">

        </div>
    </div>

    <div class="sidebar">
        <ul>
            <li><a href="{{ route('admin.index') }}">Officers wise</a></li>
            <li><a href="{{ route('admin.createStudent') }}">Create Student</a></li>
            <li><a href="#">Teacher Wise</a></li>
            <li><a href="#">Total Complaints</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Create Student</h2>
                <hr>
            </div>
        </div>
        <h3 class="card-title text-primary text-center">Registeration Student account</h3>
        <form action="{{ route('admin.studentStore') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control"
                            placeholder="Enter your First name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control"
                            placeholder="Enter your Last name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="mobile">Contact #</label>
                        <input type="text" name="mobile" id="mobile" class="form-control"
                            placeholder="Enter your Contact #">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="Enter your Username">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control"
                            placeholder="Enter your Email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Enter your Password">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control"
                            placeholder="Enter your Address">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="form-control"
                            placeholder="Enter your Date of Birth">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group d-flex">
                        <input type="submit" class="btn btn-outline-danger w-50 m-2" value="Register Student Account">
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div class="footer">
        <p>2021 Govt Post Graduate College Khar Bajaur</p>
    </div>

</body>

</html>
