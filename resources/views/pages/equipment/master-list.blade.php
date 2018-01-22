@extends('layouts.pages')

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