@extends('layouts.pages')

@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <div class="table-responsive">
        <table id="user-list" class="display table table-condensed" style="width: 100%; cellspacing: 0;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Member Number</th>
                    <th>Phone</th>
                    <th>Access Level</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $userRecord)
                    <tr>
                        <td>{{$userRecord->id}}</td>
                        <td>{{$userRecord->name}}</td>
                        <td>{{$userRecord->email}}</td>
                        <td>{{$userRecord->memberNumber}}</td>
                        <td>{{$userRecord->phone}}</td>
                        <td>{{$userRecord->accessLevel}}</td>
                        <td>{{$userRecord->role}}</td>
                        <td><a class="btn btn-xs btn-primary" href="/users/{{$userRecord->id}}">View</a>&nbsp;<a class="btn btn-xs btn-warning" href="#">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection