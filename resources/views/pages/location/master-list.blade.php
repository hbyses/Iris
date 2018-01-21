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
                @foreach($location as $locationItem)
                    <tr>
                        <td>{{$locationItem->id}}</td>
                        <td>{{$locationItem->name}}</td>
                        <td>{{$locationItem->description}}</td>
                        <td>{{$locationItem->locationManager_id}}</td>
                        <td>{{$locationItem->parentLocation_id}}</td>
                        <td><a class="btn btn-xs btn-primary" href="/location/{{$locationItem->id}}">View</a>&nbsp;<a class="btn btn-xs btn-warning" href="#">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection