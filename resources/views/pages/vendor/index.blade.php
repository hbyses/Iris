@extends('layouts.framework')

@section('css-extra')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.dataTables.min.css" />
@endsection

@section('extjs-extra')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
<script src="{{asset('js/datatable-defs.js')}}"></script>
@endsection


@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <div class="table-responsive">
        <table id="equipment-list" class="display table table-condensed" style="width: 100%; cellspacing: 0;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Phone</td>
                    <th>Email</td>
                    <th>Suburb</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendors as $vendor)
                    <tr>
                        <td>{{$vendor->id}}</td>
                        <td>{{$vendor->name}}</td>
                        <td>{{$vendor->description}}</td>
                        <td>{{$vendor->phone1}}</td>
                        <td>{{$vendor->email}}</td>
                        <td>{{$vendor->addressSuburb}}</td>
                        <td><div class="btn-group m-b-sm">
                                <a class="btn btn-xs btn-success" href="/vendor/{{$vendor->id}}">View</a>
                                <a class="btn btn-xs btn-warning" href="/vendor/{{$vendor->id}}/edit">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection