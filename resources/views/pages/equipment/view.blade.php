@extends('layouts.pages')

@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <!--START DETAILS COLUMN-->
        <h2>Chainsaw - 036 Stihl - 00005679</h2> - <a class="btn btn-sm btn-danger" href="edit/#">Edit</a><a class="btn btn-sm btn-danger" href="edit/#">Delete</a>
        
        <div class="col-md-6">
            <div class="table-responsive">
            <table class="display table" style="width: 100%; cellspacing: 0;">
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
        </div>
        <!--END DETAILS COLUMN-->
        <!--START DETAILS COLUMN-->
        <div class="col-md-6">
            <div class="table-responsive">
            <h2>Locations</h2>
                <table class="display table" style="width: 100%; cellspacing: 0;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Wet Store</td>
                            <td>1</td>
                            <td>01/03/2017</td>
                        </tr>
                    </tbody>
                </table>    
            </div>
            <div class="table-responsive">
            <h2>Activities</h2>
                <table class="display table" style="width: 100%; cellspacing: 0;">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Description</th>
                            <th>User</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Repair</td>
                            <td>Replaced powerhead</td>
                            <td>Ross Wallace</td>
                            <td>03/07/2017</td>
                        </tr>
                        <tr>
                            <td>Service</td>
                            <td>General service</td>
                            <td>Harrison Johnson</td>
                            <td>19/12/2017</td>
                        </tr>
                    </tbody>
                </table>    
            </div>
        </div>
        <!--END DETAILS COLUMN-->
    </div>
</div>
@endsection