
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
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-primary text-center">Register to your Admin account</h3>
                    <form action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group d-flex">
                                    <input type="submit" class="btn btn-outline-danger w-50 m-2" value="Register">
                                    <a href="{{ route('admin.login') }}" class="btn btn-dark w-50 m-2 hover-yellow">login</a>
                                </div>
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