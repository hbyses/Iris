@extends('layouts.pages')

@section('content')
<div class="panel panel-white">
    <div class="panel-body">
            <h2>Chainsaw - 036 Stihl - 00005679</h2>
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
                            <td>00005679</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>Chainsaw</td>
                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td>Stihl</td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td>036</td>
                        </tr>
                    </tbody>
                    </table>  
                </div>
                <div class="btn-group m-b-sm">
                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </div>
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