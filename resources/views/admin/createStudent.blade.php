@extends('admin.layout.app')
@section('content')
<div class="content">
    <div class="row mt-2">
        <div class="col-12">
            <h2>Create Student</h2>
            <hr>
        </div>
    </div>
    <h3 class="card-title text-primary text-center">Registeration Student account</h3>
    <x-alert />
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
                    <label for="program">Program</label>
                    <select class="form-control" name="program" id="program">
                            <option value="BS">BS</option>
                            <option value="Other">Other</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="programs">Program Section</label>
                    <select class="form-control" name="programs" id="programs">
                        <optgroup label="BS">
                            <option value="BS Computer">Computer</option>
                            <option value="BS English Islmic">English Islmic</option>
                            <option value="BS Botony">Botony</option>
                            <option value="BS Arts">Arts</option>
                            <option value="BS Generate Science">Generate Science</option>
                            <option value="BS Pre-Medical">Pre-Medical</option>
                            <option value="BS Pre-Engineering">Pre-Engineering</option>
                        </optgroup>
                        <optgroup label="Other">
                            <option value="Other First year">First year</option>
                            <option value="Other Second Year">Second Year</option>
                        </optgroup>
                    </select>
                    
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
@endsection