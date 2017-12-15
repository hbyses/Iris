@extends('layouts.pages')

@section('content')
<div class="row">
    <!--Start Ops Panel-->
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading panel-red">
                <h1 style="color: white;" class="panel-title">Operations</h1>
            </div>
            <div class="panel-body" style="padding-bottom: 5px;">
                <table class="table table-condensed" style="margin-bottom: 0px;">
                    <tr>
                        <td style="border-top: none; width: 25%;"><a class="btn btn-block btn-default" href="/dashboards/operations/duties">Current Duties</a></td>
                        <td style="border-top: none; width: 75%;"><p>This dashboard displays information related to the current incident management team outside of declared events.</p></td>
                    </tr>
                    <tr>
                        <td><a class="btn btn-block btn-default" href="/dashboards/operations/capability">Unit Capability</a></td>
                        <td><p>This dashboard displays information related to currently operational capability based on key metrics compared against the unit capability plan.</p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!--End Ops Panel-->

    <!--Start Training Panel-->
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading panel-green">
                <h1 style="color: white;" class="panel-title">Training</h1>
            </div>
            <div class="panel-body" style="padding-bottom: 5px;">
            <table class="table table-condensed" style="margin-bottom: 0px;">
                <tr>
                    <td style="border-top: none; width: 25%;"><a class="btn btn-block btn-default" href="/dashboards/operations/duties">Current Competencies</a></td>
                    <td style="border-top: none; width: 75%;"><p>This dashboard displays information related to the current spread and quantity of competencies in the unit.</p></td>
                </tr>
                <tr>
                    <td><a class="btn btn-block btn-default" href="/dashboards/operations/capability">Gap Analysis</a></td>
                    <td><p>This dashboard displays information related to the gaps in member training according to required core competencies.</p></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
    <!--End Training Panel-->

    <!--Start Logistics Panel-->
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading panel-blue">
                <h1 style="color: white;" class="panel-title">Logistics</h1>
            </div>
            <div class="panel-body" style="padding-bottom: 5px;">
                <table class="table table-condensed" style="margin-bottom: 0px;">
                    <tr>
                        <td style="border-top: none; width: 25%;"><a class="btn btn-block btn-default" href="/dashboards/operations/duties">Dash One</a></td>
                        <td style="border-top: none; width: 75%;"><p>This dashboard displays information related to the current spread and quantity of competencies in the unit.</p></td>
                    </tr>
                    <tr>
                        <td><a class="btn btn-block btn-default" href="/dashboards/operations/capability">Dash Two</a></td>
                        <td><p>This dashboard displays information related to the gaps in member training according to required core competencies.</p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!--End Logistics Panel-->
</div>

@endsection