@extends('layouts.pages')

@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <h2>{{$equipmentData->name}}</h2>
        <!--START DETAILS COLUMN-->
        <div class="col-md-6">
            <div class="table-responsive">
                <h2>Details</h2>
                <table class="display table table-condensed" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Property</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{$equipmentData->id}}</td>
                        </tr>
                        <tr>
                            <td>Equipment Type</td>
                            <td>{{$equipmentData->equipmentType}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{$equipmentData->name}}</td>
                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td>{{$equipmentData->brand}}</td>
                        </tr>
                        <tr>
                            <td>Model</td>
                            <td>{{$equipmentData->model}}</td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td>{{$equipmentData->size}}</td>
                        </tr>
                    </tbody>
                    </table>  
            </div>
            <div class="btn-group m-b-sm">
                <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Actions <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{$equipmentData->id}}/edit">Edit</a></li>
                    <li><a href="#">Delete</a></li>
                </ul>
            </div>
            <!--Attachments-->
            <h2>Attachments</h2>
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
        <!--END DETAILS COLUMN-->
        <!--START DETAILS COLUMN-->
        <div class="col-md-6">
            <h2>Locations</h2>
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
                        <td><a class="btn btn-xs btn-warning" href="#">Edit</a></td>
                    </tr>
                </tbody>
            </table>
            <h2>Equipment Groups</h2>
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
            <h2>Activities</h2>
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
        <!--END DETAILS COLUMN-->
    </div>
</div>
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