@extends('layouts.pages')

@section('content')
<div class="col-md-4">
    <div class="panel panel-white">
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="row">ROLE</td>
                        <th scope="row">MEMBER</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Duty Officer</th>
                        <td>{{$ops_dash_data['do']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Back Up Duty Officer</th>
                        <td>{{$ops_dash_data['budo']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Team Leader</th>
                        <td>{{$ops_dash_data['tl']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Duty Team</th>
                        <td>{{$ops_dash_data['team']}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection