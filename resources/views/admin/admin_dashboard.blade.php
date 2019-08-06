@extends('layouts.master')

@section('content')

<div class="row customresponsive">
	<div class="col-md-offset-2 col-md-8">
	

<h3 class="text-center admin-dashboard-title">Admin Dashboard</h3>

	<div class="row">
		<div class="col-md-4">
			<div class="categories">
			<h3>Categories</h3>
			<span class="categories-count"> {{$categories->count()}} </span>
		    </div>
		</div>

		<div class="col-md-4">
			<div class="posts">
			<h3>Posts</h3>
			<span class="posts-count"> {{$posts->count()}} </span>
		    </div>
		</div>

	</div>
		
	</div>
</div>
@endsection