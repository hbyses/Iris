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
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Size</th>
                    <th>Consumable</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipment as $equipmentItem)
                    <tr>
                        <td>{{$equipmentItem->id}}</td>
                        <td>{{$equipmentItem->name}}</td>
                        <td>{{$equipmentItem->brand}}</td>
                        <td>{{$equipmentItem->model}}</td>
                        <td>{{$equipmentItem->size}}</td>
                        <td>{{$equipmentItem->consumable}}</td>
                        <td><a class="btn btn-xs btn-primary" href="/equipment/{{$equipmentItem->id}}">View</a>&nbsp;<a class="btn btn-xs btn-warning" href="#">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection