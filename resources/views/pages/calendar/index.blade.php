@extends('layouts.framework')

@section('extjs-extra')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js"></script>
@endsection

@section('inlinejs-extra')
$('#calendar').fullCalendar({
    themeSystem: 'bootstrap3',
    height: 650
});
@endsection

@section('css-extra')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.css" />

@section('content')
<div id='calendar'></div>

@endsection