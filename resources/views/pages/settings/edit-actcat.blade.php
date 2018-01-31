@extends('layouts.pages')

@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <h3>Update Activity Category></h3>
        <form method="post" action="{{action('ActivityCategoryController@update', $eqactcat->id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <input type="text" class="form-control" name="name" value="{{$eqactcat->name}}">
        <div class="btn-group m-b-sm">
            <button type="submit" class="btn btn-sm btn-success">Update Category</button>
            <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Actions <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/admin/settings/activity-category">Cancel Edit</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection