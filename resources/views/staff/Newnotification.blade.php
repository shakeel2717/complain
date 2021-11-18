@extends('staff.layout.app')
@section('content')
    <div class="content">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Send Message</h2>
                <x-alert />
                <hr>
            </div>
        </div>
        <form action="{{ route('staff.notificationReq') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="to">To</label>
                                <select name="to" id="to" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Student">Student</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="reply">Write Message</label>
                                <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group d-flex">
                                <input type="submit" class="btn btn-outline-danger w-100 m-2" value="Reply on This Complaint">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>
@endsection
