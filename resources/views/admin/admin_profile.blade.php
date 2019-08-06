@extends('layouts.master')

@section('content')

<div class="row customresponsive">
	<div class="col-md-offset-4 col-md-4">
	

<h2 class=""><u> Admin Profile Page</u></h2>

	<img class="profile-img" src="{{ asset('images/one.jpg') }}">
	
	<div class="row customresponsive">
		<div class="col-md-2"><h4> Name:</h4></div>
		<div class="col-md-6"><h4> {{ Session::get('admin_name') }} </h4></div>
	</div>

	<div class="row customresponsive">
		<div class="col-md-2"><h4> E-mail:</h4></div>
		<div class="col-md-6"><h4> {{ Session::get('admin_email') }} </h4></div>
	</div>

	<div class="row customresponsive">
		<div class="col-md-2"><h4> Phone:</h4></div>
		<div class="col-md-6"><h4> {{ Session::get('admin_phone') }} </h4></div>
	</div>

	
	</div>
</div>

@endsection