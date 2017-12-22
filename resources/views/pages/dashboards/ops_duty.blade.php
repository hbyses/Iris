@extends('layouts.pages')

@section('content')
<div class="col-md-4">
    <div class="panel">
    <div class="panel-heading panel-red">
        <h1 style="color: white;" class="panel-title">Current Operational Team</h1>
    </div>
    <div class="panel-body panel-white">
        <h2 style="text-transform: uppercase; text-align: center;">Duty Team - {{$currentDutyTeam['team']}}</h2>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th style="border-top: none;" scope="row">Duty Officer</th>
                    <td style="border-top: none;">{{$currentDutyTeam['do']}}</td>
                    <td style="border-top: none;">{{$currentDutyTeam['doPhone']}}</td>
                </tr>
                <tr>
                    <th scope="row">Back Up Duty Officer</th>
                    <td>{{$currentDutyTeam['budo']}}</td>
                    <td>{{$currentDutyTeam['budoPhone']}}</td>
                </tr>
                <tr>
                    <th scope="row">Team Leader</th>
                    <td>{{$currentDutyTeam['tl']}}</td>
                    <td>{{$currentDutyTeam['tlPhone']}}</td>                        
                </tr>
            </tbody>
        </table>
        <button onclick="show the duties editor div">
        <div id="dutiesEditor">
            <form action="/dashboards/currentduties" method="POST">
                <div class="form-group">
                    <label for="team">Duty Team</label>
                    <input type="text" name="team" value="{{currentDutyTeam['team']}}" class="form-control m-t-xxs" id="team">
                </div>
                <div class="form-group">
                    <label for="do">Duty Officer</label>
                    <input type="text" name="do" value="{{currentDutyTeam['do']}}" class="form-control m-t-xxs" id="do">
                </div>
                <div class="form-group">
                    <label for="budo">Backup Duty Officer</label>
                    <input type="text" name="budo" value="{{currentDutyTeam['budo']}}" class="form-control m-t-xxs" id="budo">
                </div>
                <div class="form-group">
                    <label for="tl">Team Leader</label>
                    <input type="text" name="tl" value="{{currentDutyTeam['tl']}}" class="form-control m-t-xxs" id="do">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="panel">
    <div class="panel-heading panel-blue">
                <h1 style="color: white;" class="panel-title">Current Operational Roster</h1>
            </div>
        <div class="panel-body panel-white">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="row">Week</td>
                        <th scope="row">Duty Team</td>
                        <th scope="row">Team Leader</td>
                        <th scope="row">Deputy Team Leader</td>
                        <th scope="row">Duty Officer</td>
                        <th scope="row">Backup Duty Officer</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($weeklyDuties as $weeklyDuty)
                        <tr>
                            <td>{{$weeklyDuty['date']}}</td>
                            <td>{{$weeklyDuty['team']}}</td>
                            <td>{{$weeklyDuty['tlName']}}</td>
                            <td>{{$weeklyDuty['dtlName']}}</td>
                            <td>{{$weeklyDuty['doName']}}</td>
                            <td>{{$weeklyDuty['budoName']}}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection