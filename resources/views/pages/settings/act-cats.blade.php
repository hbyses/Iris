@extends('layouts.pages')

@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <div class="table-responsive">
            <table id="activity-categories" class="display table table-striped" style="width: 100%; cellspacing: 0;">
                <thead>
                    <tr>
                        <th>Activity</th>
                        <th>Created At</th>
                        <th>Last Modified</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actcat as $actcatItem)
                        <tr>
                            <td>{{$actcatItem->name}}</td>
                            <td>{{$actcatItem->created_at}}</td>
                            <td>{{$actcatItem->updated_at}}</td>
                            <td><div class="btn-group m-b-sm">
                                    <a class="btn btn-xs btn-success" href="edit/{{$actcatItem->id}}">Edit</a>&nbsp;<button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Actions <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="remove/{{$actcatItem->id}}">Delete</a></li>
                                        </ul>
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