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
                                <td>{{$equipmentData->name}}</td>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td>{{$equipmentData->id}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$equipmentData->status}}</td>
                            </tr>
                            <tr>
                                <td>Equipment Type</td>
                                <td>{{$equipmentData->equipmentType}}</td>
                            </tr>
                            <tr>
                                <td>Equipment Category</td>
                                <td>{{$equipmentData->equipmentCategory["name"]}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{$equipmentData->description}}</td>
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
                            <tr>
                                <td>Serial Number</td>
                                <td>{{$equipmentData->serialNumber}}</td>
                            </tr>
                            <tr>
                                <td>Asset Number</td>
                                <td>{{$equipmentData->assetNumber}}</td>
                            </tr>
                            <tr>
                                <td>Inspection Frequency</td>
                                <td>{{$equipmentData->inspectionFrequency}}</td>
                            </tr>
                            <tr>
                                <td>Date Purchased</td>
                                <td>{{$equipmentData->datePurchased}}</td>
                            </tr>
                            <tr>
                                <td>End of Life</td>
                                <td>{{$equipmentData->endOfLife}}</td>
                            </tr>
                            <tr>
                                <td>Created At</td>
                                <td>{{$equipmentData->created_at}}</td>
                            </tr>
                            <tr>
                                <td>Last Modified</td>
                                <td>{{$equipmentData->updated_at}}</td>
                            </tr>
                            <tr>
                                <td>Barcode</td>
                                <td><?php echo DNS1D::getBarcodeSVG($equipmentData->id, "C39"); ?></td>
                            </tr>
                            <tr>
                                <td>Barcode</td>
                                <td><?php echo DNS2D::getBarcodeSVG("http://staging.iris.hronsbyses.org/equipment/view/" . $equipmentData->id, "QRCODE"); ?></td>
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
                        <li><a href="{{$equipmentData->id}}/destroy">Delete</a></li>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipmentData->locations as $location)
                    <tr>
                        <td>{{$location["name"]}}</td>
                        <td>{{$location["store"]["quantity"]}}</td>
                        <td><div class="btn-group m-b-sm">
                                <a class="btn btn-xs btn-success" href="#">View</a>&nbsp;<button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Remove from Location</a></li>
                                    </ul>
                            </div></td>
                    </tr>
                    @endforeach
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