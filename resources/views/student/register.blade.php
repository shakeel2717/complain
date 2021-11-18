
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

<body>
    <div class="parrent">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-primary text-center">Register to your Student account</h3>
                    <x-alert />
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter your First name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter your Last name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="mobile">Contact #</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your Contact #">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter your Username">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter your Address">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter your Date of Birth">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group d-flex">
                                    <input type="submit" class="btn btn-outline-danger w-50 m-2" value="Register">
                                    <a href="{{ route('student.login') }}" class="btn btn-dark w-50 m-2 hover-yellow">login</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <p>Go Back to Home <a href="{{ route('home') }}">Home</a></p>
                            </div>
    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>2021 Govt Post Graduate College Khar Bajaur</p>
    </div>

</body>

</html>