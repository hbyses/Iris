@extends('layouts.framework')






@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <div class="table-responsive">
        <table id="location-list" class="display table table-condensed" style="width: 100%; cellspacing: 0;">
            <thead>
                <tr>
                    <th style="display:none;">ID</th>
                    <th style="width: 30px;"></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Manager</th>
                    <th>Parent Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td style="display:none;">{{$location->id}}</td>
                        <td width>
                        @if($location->locationType === 1)
                            <i class="fa fa-building"></i> 
                        @elseif($location->locationType === 2)
                            <i class="fa fa-truck"></i> 
                        @endif
                        </td>
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