@extends('admin.layout.app')
@section('content')
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
                            <h2 class="card-title">{{$complaints->where('subject','Teacher')->count()}}</h2>
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
                            <h2 class="card-title">{{$complaints->where('subject','Officer')->count()}}</h2>
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
                            <h2 class="card-title">{{$complaints->where('status','Replied')->count()}}</h2>
                            <h4 class="card-title">Complaints with Replies</h4>
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
                            <h2 class="card-title">{{ (count($complaints) > 0 ? $complaints[0]->student->where('program','BS')->count() : 0 )}}</h2>
                            <h4 class="card-title">BS Level Complaints</h4>
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
                            <h2 class="card-title">{{$students->where('status',1)->count()}}</h2>
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
                            <h2 class="card-title">{{ (count($complaints) > 0 ? $complaints[0]->student->where('program','Other')->count() : 0 )}}</h2>
                            <h4 class="card-title">Other Level Complaints</h4>
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
                            <h2 class="card-title">{{$reply->where('student_id',1)->count()}}</h2>
                            <h4 class="card-title">Total Replies</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection