@extends('layouts.pages')

@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <div class="table-responsive">
        <table id="location-list" class="display table table-condensed" style="width: 100%; cellspacing: 0;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Manager</th>
                    <th>Parent Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td>{{$location->id}}</td>
                        <td>{{$location->name}}</td>
                        <td>{{$location->description}}</td>
                        <td>{{$location->user["name"]}}</td>
                        <td>{{$location->parentLocation["name"]}}</td>
                        <td><a class="btn btn-xs btn-primary" href="/location/{{$location->id}}">View</a>&nbsp;<a class="btn btn-xs btn-warning" href="#">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection