@extends('layouts.master')
@include('navbar.header')
@section('content')
@include('sidebar.dashboard')
<link rel="stylesheet" href="{{URL::to('assets/css/profile.css')}}">
<main class="col bg-faded py-3 flex-grow-1">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h5>Total Victims: {{$total_complainant -> total}}</h5>
    <h5>Total Suspect: {{$total_accuser -> total}}</h5>    
    <h5>Total Persecutor: {{$total_lawyer -> total}}</h5>
    <h5>Total Crime: {{$total_crimecharges -> total}}</h5>   
    <h5>Total Cases: {{$total_complainant -> total}}</h5>    
@endsection
</body>

</html>