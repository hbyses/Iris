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
                    <th>Status</th>
                    <th>Type</td>
                    <th>Category</td>
                    <th>Serial Num</th>
                    <th>Asset Num</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Size</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipment as $equipmentItem)
                    <tr>
                        <td>{{$equipmentItem->id}}</td>
                        <td>{{$equipmentItem->name}}</td>
                        <td>{{$equipmentItem->status}}</td>
                        <td>{{$equipmentItem->equipmentType}}</td>
                        <td>{{$equipmentItem->equipmentCategory["name"]}}</td>
                        <td>{{$equipmentItem->serialNumber}}</td>
                        <td>{{$equipmentItem->assetNumber}}</td>
                        <td>{{$equipmentItem->brand}}</td>
                        <td>{{$equipmentItem->model}}</td>
                        <td>{{$equipmentItem->size}}</td>
                        <td><div class="btn-group m-b-sm">
                                <a class="btn btn-xs btn-success" href="/equipment/{{$equipmentItem->id}}">View</a>
                                <a class="btn btn-xs btn-warning" href="/equipment/{{$equipmentItem->id}}/edit">Edit</a>
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