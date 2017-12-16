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
                        <td style="border-top: none;">04398908970</td>
                    </tr>
                    <tr>
                        <th scope="row">Back Up Duty Officer</th>
                        <td>{{$currentDutyTeam['budo']}}</td>
                        <td>04398908970</td>
                    </tr>
                    <tr>
                        <th scope="row">Team Leader</th>
                        <td>{{$currentDutyTeam['tl']}}</td>
                        <td>04398908970</td>                        
                    </tr>
                </tbody>
            </table>
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