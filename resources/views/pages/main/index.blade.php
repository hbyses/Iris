@extends('layouts.pages')

@section('content')
<div class="page-inner">
            <div class="page-title">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
<h1>{{$title}}</h1>
<p>This is a unit management system</p>
@endsection