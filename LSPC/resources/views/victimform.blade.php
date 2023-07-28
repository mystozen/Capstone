@extends('layouts.master')
@include('navbar.header')
@section('content')
@include('sidebar.victim')
<link rel="stylesheet" href="{{URL::to('assets/css/profile.css')}}">
<main class="col bg-faded py-3 flex-grow-1">
<head>
    <title>Victim Form</title>
</head>
<body>
    <h1>Victim/Form</h1>
<div class="container">
	<form action="/victim/form" method="post">
		@csrf
		<div class="row">
			<div class="col-lg-5 offset-lg-1">
				<label for="first_name"> First Name</label>
				<input class="form-control" type="text" Name="first_name">
			</div>
			<div class="col-lg-5">
				<label for="last_name"> Last Name</label>
				<input class="form-control" type="text" Name="last_name">
			</div>
		</div>
		<div class="row my-3">
			<div class="col-lg-5 offset-lg-1">
				<label for="email_address"> Email Address</label>
				<input class="form-control" type="email" Name="email_address">
			</div>
			<div class="col-lg-5">
				<label for="mobile_number"> Phone #</label>
				<input class="form-control" type="text" Name="mobile_number">
			</div>
		</div>
		<div class="row my-3">
			<div class="col-lg-5 offset-lg-1">
				<label for="birthdate"> Birthday</label>
				<input class="form-control" type="date" Name="birthdate">
			</div>
			<div class="col-lg-5">
				<label for="gender"> Gender</label>
				<select class="form-control" type="dropdown" Name="gender">
					<option value="male">Male</option>
					<option value="male">Female</option>
				</select>
			</div>
		</div>
		<div class="row my-3">
			<div class="col-lg-5 offset-lg-1">
				<label for="province">Province</label>
				<select class="form-control" type="dropdown" Name="province">
					<option value="">-Select Provincce-</option>
					<option value="Abra">Abra</option>
					<option value="Baguio">Baguio</option>
					<option value="Cebu">Cebu</option>
					<option value="Davao">Davao</option>
					<option value="Manila">Manila</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<input type="submit">
			</div>
		</div>

	</form>
</div>

@endsection
</body>
</html>