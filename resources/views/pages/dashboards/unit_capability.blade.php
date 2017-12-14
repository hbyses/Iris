@extends('layouts.pages')

@section('content')
<div class="col-md-6">
    <div class="panel panel-white">
        <div class="panel-body">
            <h3>Capability - Skills Gap</h3>
            <canvas id="skill-capability-gap" height="250px"></canvas>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="panel panel-white">
        <div class="panel-body">
            <h3>Capability - Skills Distribution</h3>
            <canvas id="skill-capability-dist" height="250px"></canvas>
        </div>
    </div>
</div>

<!--Chart Data-->
<script defer src="{{asset('js/charts/capability.js')}}"></script>
@endsection