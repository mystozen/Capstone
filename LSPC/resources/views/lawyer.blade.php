@extends('layouts.master')
@include('navbar.header')
@section('content')
@include('sidebar.lawyer')
<link rel="stylesheet" href="{{URL::to('assets/css/profile.css')}}">
<main class="col bg-faded py-3 flex-grow-1">
<head>
    <title>Persecutor</title>
</head>
<body>
    <h1>Persecutor</h1>
    <h5>Total Lawyer: {{$total_lawyer -> total}}</h5>    
<table class=table>
    <tr>
    <th>
       Persecutor ID 
    </th>
    <th>
        First Name
    </th>
    <th>
        Last Name
    </th>
    <th>
        Position
    </th>
    </tr>
    @foreach ($lawyer as $L)
        <tr>
            <td>{{$L -> persecutor_id}}</td>
            <td>{{$L -> first_name}}</td>
            <td>{{$L -> last_name}}</td>
            <td>{{$L -> position}}</td>
        </tr>
    @endforeach
</table>
@endsection
</body>

</html>