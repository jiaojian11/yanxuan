@extends('home.index')
@section('demo')
		<!-- resources/views/auth/register.blade.php -->
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
<div style="width: 300px;height:150px;margin-left:400px; margin-top: 50px; background-color: #ccc;">
<form method="POST" action="/auth/register">
	{!! csrf_field() !!}

	<div>
		Name
		<input type="text" name="name" value="{{ old('name') }}" style="border: 1px solid red;">
	</div>

	<div>
		Email
		<input type="email" name="email" value="{{ old('email') }}"style="border: 1px solid red;">
	</div>

	<div>
		Password
		<input type="password" name="password"style="border: 1px solid red;">
	</div>

	<div>
		Confirm Password
		<input type="password" name="password_confirmation"style="border: 1px solid red;">
	</div>

	<div>
		<button type="submit">Register</button>
	</div>
</form>
	</div>
@endsection