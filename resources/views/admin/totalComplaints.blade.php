@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="row mt-2">
            <div class="col-12">
                <h2>Admin Dashboard</h2>
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
                        <th>Reject</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($complaints as $complain)
                        <tr>
                            <td>{{ $complain->to }}</td>
                            <td>{{ $complain->subject }}</td>
                            <td>{{ $complain->message }}</td>
                            <td>{{ $complain->status }}</td>
                            <td><a href="{{ route('admin.totalComplaintsFix',['id' => $complain->id]) }}" class="btn btn-success btn-sm">Fixed</a></td>
                            <td><a href="{{ route('admin.compalinReply',['id' => $complain->id]) }}" class="btn btn-primary btn-sm">Reply</a></td>
                            <td><a href="{{ route('admin.totalComplaintsRej',['id' => $complain->id]) }}" class="btn btn-danger btn-sm">Reject</a></td>
                            <td><a href="{{ route('admin.totalComplaintsDel',['id' => $complain->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection