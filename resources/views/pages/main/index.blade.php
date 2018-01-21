@extends('layouts.pages')

@section('content')
<div class="panel panel-white">
    <div class="panel-body">
        <h2>{{$title}}</h2>
        <!--START DETAILS COLUMN-->
        <div class="col-md-6">
            <div>
                <h3>My Dash</h3>  
            </div>
        </div>
        <!--END DETAILS COLUMN-->
        <!--START DETAILS COLUMN-->
        <div class="col-md-6">
            <h3>Item 1</h3>
            <h3>Item 2</h3>
            <h3>Item 3</h3>
        </div>
        <!--END DETAILS COLUMN-->
    </div>
</div>
@endsection