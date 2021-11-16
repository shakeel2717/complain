@extends('student.layout.app')
@section('content')
<div class="content">
    <div class="row mt-2">
        <div class="col-12">
            <h2>Student Dashboard</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <a href="{{ route('complaint.create') }}" class="btn btn-outline-dark btn-lg"> <i class="fas fa-plus-circle"></i> Create Complaint</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-exclamation-circle" style="font-size: 45px;"></i>
                        </div>
                        <div class="col-10">
                            <h2 class="card-title">{{$complaints->count()}}</h2>
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
                            <h2 class="card-title">{{$complaints->where('status','Rejected')->count()}}</h2>
                            <h4 class="card-title">Rejected Complaints</h4>
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
                            <h2 class="card-title">{{$complaints->where('status','Completed')->count()}}</h2>
                            <h4 class="card-title">Completed Complaints</h4>
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
                            <h2 class="card-title">{{$complaints->where('status','Deleted')->count()}}</h2>
                            <h4 class="card-title">Deleted Complaints</h4>
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
                            <h2 class="card-title">{{$complaints->where('status','Reply')->count()}}</h2>
                            <h4 class="card-title">Answered Complaints</h4>
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
@endsection