@extends('layouts.master')
@include('navbar.header')
@section('content')
@include('sidebar.crimecharges')
<link rel="stylesheet" href="{{URL::to('assets/css/profile.css')}}">
<main class="col bg-faded py-3 flex-grow-1">
<head>
    <title>Crime Charges</title>
</head>
<body>
    <h1>Crime Charges</h1>
    <h5>Total Crime: {{$total_crimecharges -> total}}</h5>    
<table class="table">
    <tr>
    <th>
       Crime Charge ID 
    </th>
    <th>
        classification
    </th>
    <th>
        Crime Charges
    </th>
    </tr>
    @foreach ($CrimeCharges as $c)
        <tr>
            <td>{{$c -> crime_id}}</td>
            <td>{{$c -> classification}}</td>
            <td>{{$c -> crime_charge}}</td>
        </tr>
    @endforeach
</table>
@endsection
</body>

</html>