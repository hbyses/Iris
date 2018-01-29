@extends('layouts.pages')

@section('content')
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 style="color: rgb(95, 95, 95); font-size: large;" class="panel-title">Details</h1>
        </div>
        <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-condensed" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{$location->name}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{$location->description}}</td>
                            </tr>
                            <tr>
                                <td>Location Type</td>
                                <td>{{$location->locationType}}</td>
                            </tr>
                            <tr>
                                <td>Manager</td>
                                <td>{{$location->user["name"]}}</td>
                            </tr>
                            <tr>
                                <td>Parent Location</td>
                                <td>{{$location->parentLocation["name"]}}</td>
                            </tr>
                            <tr>
                                <td>Created At</td>
                                <td>{{$location->created_at}}</td>
                            </tr>
                            <tr>
                                <td>Last Modified</td>
                                <td>{{$location->updated_at}}</td>
                            </tr>
                        </tbody>
                        </table>  
                </div>
                <div class="btn-group m-b-sm">
                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{$location->id}}/edit">Edit</a></li>
                        <li><a href="{{$location->id}}/destroy">Delete</a></li>
                    </ul>
                </div>
        </div>
    </div>
</div>
<!--END DETAILS COLUMN-->
<!--START RELATED COLUMN-->
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 style="color: rgb(95, 95, 95); font-size: large;" class="panel-title">Locations</h1>
        </div>
        <div class="panel-body">
            <table class="display table table-condensed table-striped" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Wet Store</td>
                        <td>1</td>
                        <td>01/03/2017</td>
                        <td><div class="btn-group m-b-sm">
                                <a class="btn btn-xs btn-success" href="#">View</a>&nbsp;<button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Remove from Location</a></li>
                                    </ul>
                            </div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-default">
            <div class="panel-heading">
                <h1 style="color: rgb(95, 95, 95); font-size: large;" class="panel-title">Equipment Groups</h1>
            </div>
            <div class="panel-body">
                <table class="display table table-condensed table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Group Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>General Search Kit 1</td>
                            <td><div class="btn-group m-b-sm">
                                    <a class="btn btn-xs btn-success" href="#">View</a>&nbsp;<button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Actions <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Remove from Group</a></li>
                                        </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Mobile Search Kit 1</td>
                            <td><div class="btn-group m-b-sm">
                                    <a class="btn btn-xs btn-success" href="#">View</a>&nbsp;<button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Actions <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Remove from Group</a></li>
                                        </ul>
                                </div>    
                            </td>
                        </tr>
                    </tbody>
                </table>  
            </div>
    </div>   
    <div class="panel panel-default">
            <div class="panel-heading">
                <h1 style="color: rgb(95, 95, 95); font-size: large;" class="panel-title">Activities</h1>
            </div>
            <div class="panel-body">
                <table class="display table table-condensed table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Description</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Repair</td>
                            <td>Replaced powerhead</td>
                            <td>Ross Wallace</td>
                            <td>03/07/2017</td>
                            <td><a class="btn btn-xs btn-success" href="#">View</a></td>
                        </tr>
                        <tr>
                            <td>Service</td>
                            <td>General service</td>
                            <td>Harrison Johnson</td>
                            <td>19/12/2017</td>
                            <td><a class="btn btn-xs btn-success" href="#">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <div class="panel panel-default">
            <div class="panel-heading">
                <h1 style="color: rgb(95, 95, 95); font-size: large;" class="panel-title">Attachments</h1>
            </div>
            <div class="panel-body">
                <table class="display table table-condensed table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Filename</th>
                            <th>Size</th>
                            <th>Description</th>
                            <th>Date Uploaded</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>User Guide.pdf</td>
                            <td>1.3mb</td>
                            <td>User Gude</td>
                            <td>01/03/2017</td>
                            <td><div class="btn-group m-b-sm">
                                    <a class="btn btn-xs btn-success" href="#">Download</a>&nbsp;
                                    <button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Rename</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>   
            </div>
    </div>
</div>
<!--END RELATED COLUMN-->
<script>
//Delete Confirmation
$(document).ready(
    function(){
        $("#delete-btn").click(function () {
            $("#delete-confirm").show("slow");
        });
    });
</script>
@endsection