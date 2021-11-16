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
            <h3 class="card-title text-primary text-center">New Complaint</h3>
            <form action="{{ route('complaint.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="to">To</label>
                            <select name="to" id="to" class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="Staff">Staff</option>
                                <option value="Admin + Staff">Admin + Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select name="subject" id="subject" class="form-control">
                                <option value="Lab">Lab</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Class Room">Class Room</option>
                                <option value="Bus">Bus</option>
                                <option value="Hospital">Hospital</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group d-flex">
                            <input type="submit" class="btn btn-outline-danger w-100 m-2" value="Add Complaint">
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
@endsection
