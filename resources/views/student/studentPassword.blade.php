@extends('student.layout.app')
@section('content')
    <div class="content">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Student Dashboard</h2>
                <hr>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <h3 class="card-title text-primary text-center">Change Password</h3>
            <x-alert />
            <form action="{{ route('student.passwordReq') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="password">Current Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Current Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="npassword">New Password</label>
                            <input type="password" name="npassword" id="npassword" class="form-control" placeholder="New Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="npassword_confirmation">Confirm New Password</label>
                            <input type="password" name="npassword_confirmation" id="npassword_confirmation" class="form-control" placeholder="Confirm New Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group d-flex">
                            <input type="submit" class="btn btn-outline-danger w-100 m-2" value="Change Password">
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
@endsection
