@extends('student.layout.app')
@section('content')
    <div class="content">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Student Dashboard</h2>
                <hr>
            </div>
        </div>
        <div class="col-md-8 mx-auto">
            <h3 class="card-title text-primary text-center">Replies on This Complaint</h3>
            @foreach ($replies as $reply)
                <div class="card border border-dark p-3">
                    <div class="card-body">
                        <p class="card-paragraph mb-0">
                            {{ $reply->message }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
