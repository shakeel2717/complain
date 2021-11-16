
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
            <li><a href="#">Officers wise</a></li>
            <li><a href="{{ route('admin.createStudent') }}">Create Student</a></li>
            <li><a href="#">Teacher Wise</a></li>
            <li><a href="#">Total Complaints</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Admin Dashboard</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                            </div>
                            <div class="col-10">
                                <h2 class="card-title">12</h2>
                                <h4 class="card-title">Total Complaints</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                            </div>
                            <div class="col-10">
                                <h2 class="card-title">12</h2>
                                <h4 class="card-title">Complaints on Teacher</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                            </div>
                            <div class="col-10">
                                <h2 class="card-title">12</h2>
                                <h4 class="card-title">Complaint on Officers</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                            </div>
                            <div class="col-10">
                                <h2 class="card-title">12</h2>
                                <h4 class="card-title">Complaints Details</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                            </div>
                            <div class="col-10">
                                <h2 class="card-title">12</h2>
                                <h4 class="card-title">Level Complaints</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                            </div>
                            <div class="col-10">
                                <h2 class="card-title">12</h2>
                                <h4 class="card-title">Register Student</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                            </div>
                            <div class="col-10">
                                <h2 class="card-title">12</h2>
                                <h4 class="card-title">Dep Wise Students</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                            </div>
                            <div class="col-10">
                                <h2 class="card-title">12</h2>
                                <h4 class="card-title">Total Replies</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>2021 Govt Post Graduate College Khar Bajaur</p>
    </div>

</body>

</html>