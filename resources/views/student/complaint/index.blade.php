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
            <h3 class="card-title text-primary text-center">All Complaint</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>To</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>View Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($complaints as $complain)
                        <tr>
                            <td>{{ $complain->to }}</td>
                            <td>{{ $complain->subject }}</td>
                            <td>{{ $complain->message }}</td>
                            <td>{{ $complain->status }}</td>
                            <td><a href="{{ route('complaint.show',['complaint' => $complain->id]) }}" class="btn btn-primary btn-sm">View Reply</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
