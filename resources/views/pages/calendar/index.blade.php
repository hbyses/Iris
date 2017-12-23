@extends('layouts.pages')

@section('content')
<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })
});
</script>
@endsection