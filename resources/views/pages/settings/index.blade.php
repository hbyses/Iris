@extends('layouts.pages')

@section('content')
<div class="col-md-4"> <!--Equipment Related Settings-->
    <div class="panel panel-white">
        <div class="panel-body">
            <div class="table-responsive">
                <h4>Equipment Settings</h4>
                <table id="equipment-settings-list" class="display table" style="width: 100%; cellspacing: 0;">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Property</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Equipment</td>
                            <td><a href="settings/activity-category">Edit Activity List Categories</a></td>
                        </tr>
                        <tr>
                            <td>Equipment</td>
                            <td><a href="settings/equipment-category">Edit Equipment Categories</a></td>
                        </tr>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>
@endsection