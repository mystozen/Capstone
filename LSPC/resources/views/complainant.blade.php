@extends('layouts.master')
@include('navbar.header')
@section('content')
@include('sidebar.victim')
<link rel="stylesheet" href="{{URL::to('assets/css/profile.css')}}">
<main class="col bg-faded py-3 flex-grow-1">

<head>
    <title>Victim</title>
</head>
<body>
    <div class="col-lg-2 offset-lg-10">
    <a href="/victim/form" class="btn btn-info">New</a>

    </div>
    <h1>Victim</h1>
    <h5>Total Victims: {{$total_complainant -> total}}</h5>   
<table class="table control">
    <tr>
    <th>
       Vicctim ID 
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
    @foreach ($complainant as $c)
        <tr>
            <td>{{$c -> person_id}}</td>
            <td>{{$c -> first_name}}</td>
            <td>{{$c -> last_name}}</td>
            <td>{{$c -> province}}</td>
        </tr>
    @endforeach
</table>
<a href="#" class="btn btn-info">New</a>
@endsection
</body>

</html>