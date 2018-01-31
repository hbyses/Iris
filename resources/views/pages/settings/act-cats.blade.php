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
                    @foreach($actcats as $actcatItem)
                        <tr>
                            <td>{{$actcatItem->name}}</td>
                            <td>{{$actcatItem->created_at}}</td>
                            <td>{{$actcatItem->updated_at}}</td>
                            <td><a class="btn btn-xs btn-success" href="{{$actcatItem->id}}/edit">Edit</a><form method="DELETE" action="{{action('ActivityCategoryController@destroy', $actcatItem->id)}}">
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection