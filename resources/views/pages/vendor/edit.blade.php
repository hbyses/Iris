@extends('layouts.framework')

@section('js-extra')
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
                    <form method="post" action="{{action('VendorController@update', $vendorData->id)}}">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PATCH">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" class="form-control" name="name" value="{{$vendorData->name}}"></td>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td><input type="text" class="form-control" name="id" value="{{$vendorData->id}}" disabled></td></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><input type="text" class="form-control" name="description" value="{{$vendorData->description}}"></td>
                        </tr>
                        <tr>
                            <td>Phone 1</td>
                            <td><input type="text" class="form-control" name="phone1" value="{{$vendorData->phone1}}"></td>
                        </tr>
                        <tr>
                            <td>Phone 2</td>
                            <td><input type="text" class="form-control" name="phone2" value="{{$vendorData->phone2}}"></td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td><input type="text" class="form-control" name="email" value="{{$vendorData->email}}"></td>
                        </tr>
                        <tr>
                            <td>Contact Name</td>
                            <td><input type="text" class="form-control" name="contactName" value="{{$vendorData->contactName}}"></td>
                        </tr>
                        <tr>
                            <td>Account Number</td>
                            <td><input type="text" class="form-control" name="accountNo" value="{{$vendorData->accountNo}}"></td>
                        </tr>
                        <tr>
                            <td>Account Name</td>
                            <td><input type="text" class="form-control" name="accountName" value="{{$vendorData->accountName}}"></td>
                        </tr>
                        <tr>
                            <td>Street Number</td>
                            <td><input type="text" class="form-control" name="addressStreetNumber" value="{{$vendorData->addressStreetNumber}}"></td>
                        </tr>
                        <tr>
                            <td>Street Name</td>
                            <td><input type="text" class="form-control" name="addressStreet" value="{{$vendorData->addressStreet}}"></td>
                        </tr>
                        <tr>
                            <td>Suburb</td>
                            <td><input type="text" class="form-control" name="addressSuburb" value="{{$vendorData->addressSuburb}}"></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><input type="text" class="form-control" name="addressState" value="{{$vendorData->addressState}}"></td>
                        </tr>
                        <tr>
                            <td>Postcode</td>
                            <td><input type="text" class="form-control" name="addressPostcode" value="{{$vendorData->addressPostcode}}"></td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td><input type="text" class="form-control" name="addressCountry" value="{{$vendorData->addressCountry}}"></td>
                        </tr>
                        <tr>
                            <td>Services Offered</td>
                            <td><input type="text" class="form-control" name="servicesOffered" value="{{$vendorData->servicesOffered}}"></td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td><input type="text" class="form-control" name="created_at" value="{{$vendorData->created_at}}" disabled></td>
                        </tr>
                        <tr>
                            <td>Last Modified</td>
                            <td><input type="text" class="form-control" name="updated_at" value="{{$vendorData->updated_at}}" disabled></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-group m-b-sm">
                <button type="submit" class="btn btn-sm btn-success">Update Vendor</button>
                <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Actions <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="/vendor/{{$vendorData->id}}">Cancel</a></li>
                    <li><a href="#">Delete</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--END DETAILS COLUMN-->
@endsection