@extends('layouts.master')
@include('navbar.header')
@section('content')
@include('sidebar.suspect')
<link rel="stylesheet" href="{{URL::to('assets/css/profile.css')}}">
<main class="col bg-faded py-3 flex-grow-1">
<head>
    <title>Suspect</title>
</head>
<body>
<div class="col-lg-2 offset-lg-10">
    <a href="/suspect/form" class="btn btn-info">New</a>

    </div>
    <h1>Suspect</h1>
    <h5>Total Suspects: {{$total_accuser -> total}}</h5>    
<table class=table>
    <tr>
    <th>
       Suspect ID 
    </th>
    <th>
        First Name
    </th>
    <th>
        Last Name
    </th>
    <th>
        Province
    </th>
    </tr>
    @foreach ($accuser as $p)
        <tr>
            <td>{{$p -> person_id}}</td>
            <td>{{$p -> first_name}}</td>
            <td>{{$p -> last_name}}</td>
            <td>{{$p -> province}}</td>
        </tr>
    @endforeach
</table>
@endsection
</body>

</html>