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
            <h3 class="card-title text-primary text-center">All Staff Members</h3>
            <x-alert />
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Mobile</th>
                        <th>Status</th>
                        <th>Approved Login</th>
                        <th>Stop Access</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffs as $staff)
                        <tr>
                            <td>{{ $staff->fname }} {{ $staff->lname }}</td>
                            <td>{{ $staff->username }}</td>
                            <td>{{ $staff->email }}</td>
                            <td>{{ $staff->password }}</td>
                            <td>{{ $staff->mobile }}</td>
                            <td>{{ $staff->status }}</td>
                            <td><a href="{{ route('admin.staffApprove',['id' => $staff->id ]) }}" class="btn btn-success">Approve</a></td>
                            <td><a href="{{ route('admin.staffStop',['id' => $staff->id ]) }}" class="btn btn-danger">Stop Access</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
