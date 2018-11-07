@extends('layouts.framework')

@section('content')
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 style="color: rgb(95, 95, 95); font-size: large;" class="panel-title">Details</h1>
        </div>
        <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-condensed" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Attribute</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{$vendorData->name}}</td>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td>{{$vendorData->id}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{$vendorData->description}}</td>
                            </tr>
                            <tr>
                                <td>Phone 1</td>
                                <td>{{$vendorData->phone1}}</td>
                            </tr>
                            <tr>
                                <td>Phone 2</td>
                                <td>{{$vendorData->phone2}}</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>{{$vendorData->email}}</td>
                            </tr>
                            <tr>
                                <td>Contact Name</td>
                                <td>{{$vendorData->contactName}}</td>
                            </tr>
                            <tr>
                                <td>Account Number</td>
                                <td>{{$vendorData->accountNo}}</td>
                            </tr>
                            <tr>
                                <td>Account Name</td>
                                <td>{{$vendorData->accountName}}</td>
                            </tr>
                            <tr>
                                <td>Street Number</td>
                                <td>{{$vendorData->addressStreetNumber}}</td>
                            </tr>
                            <tr>
                                <td>Street Name</td>
                                <td>{{$vendorData->addressStreet}}</td>
                            </tr>
                            <tr>
                                <td>Suburb</td>
                                <td>{{$vendorData->addressSuburb}}</td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>{{$vendorData->addressState}}</td>
                            </tr>
                            <tr>
                                <td>Postcode</td>
                                <td>{{$vendorData->addressPostcode}}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{$vendorData->addressCountry}}</td>
                            </tr>
                            <tr>
                                <td>Services Offered</td>
                                <td>{{$vendorData->servicesOffered}}</td>
                            </tr>
                            <tr>
                                <td>Created At</td>
                                <td>{{$vendorData->created_at}}</td>
                            </tr>
                            <tr>
                                <td>Last Modified</td>
                                <td>{{$vendorData->updated_at}}</td>
                            </tr>
                        </tbody>
                        </table>  
                </div>
                <div class="btn-group m-b-sm">
                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{$vendorData->id}}/edit">Edit</a></li>
                        <li><a href="{{$vendorData->id}}/destroy">Delete</a></li>
                    </ul>
                </div>
        </div>
    </div>
</div>
<!--END DETAILS COLUMN-->
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