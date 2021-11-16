@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Reply to This Complain</h2>
                <hr>
            </div>
        </div>
        <form action="{{ route('admin.compalinReplyReq') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="reply">Reply Message</label>
                                <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
                                <input type="hidden" name="complaint_id" value="{{ $complaint->id }}">
                                <input type="hidden" name="student_id" value="{{ $complaint->student_id }}">
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
