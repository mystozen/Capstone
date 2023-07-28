
@extends('layouts.app')
@section('content')
<div class="signup-form">
    <form action="{{ route('form/request/save') }}" method="post">
		@csrf
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>


        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control @error ('first_name') is-invalid @enderror" name="first_name"value="{{ old('first_name') }}" placeholder="First Name" ></div>
					
				<div class="col"><input type="text" class="form-control @error ('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" ></div>
			</div>        	
        </div>
        <div class="form-group">
			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Enter email">
			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
        </div>
		<div class="form-group">
			<label class="form-label">Password</label>
			<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Enter password">
			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
        </div>
		<div class="form-group">
			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Password confirmation">
		</div>        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" > I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="{{ route('form/login/view/new') }}">Sign in</a></div>
</div>
@endsection