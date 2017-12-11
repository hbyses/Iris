@extends('layouts.pages')

@section('content')
<div class="row">
    <div class="panel panel-red">
        <div class="panel-heading">
            <h1 class="panel-title">Operations</h1>
        </div>
        <div class="panel-body">
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/operations/duties">Duty Dashboard</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/operations/#">Test 1 Dashboard</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/operations/#">Test 2 Dashboard</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/operations/#">Test 3 Dashboard</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-green">
        <div class="panel-heading">
            <h3 class="panel-title">Training</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/training/skills">Member Skills Dashboard</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/training/gap-analysis">Gap Analysis</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/training/#">Training Dashboard</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/training/#">Training Dashboard</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-blue">
        <div class="panel-heading">
            <h3 class="panel-title">Logistics</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/logistics/primary">Duty Dashboard</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/logistics/fleet">Test 1 Dashboard</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/logistics/#">Test 2 Dashboard</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-block btn-default" href="/dashboards/logistics/#">Test 3 Dashboard</a>
            </div>
        </div>
    </div>
</div>

@endsection