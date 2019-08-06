
@extends('layouts.master')

@section('content')

<div class="panel panel-default" id="panel">
	<div class="panel-heading" id="headline">
		<h2 class="text-center category-name">{{ $category->name }}</h2>
	</div>
	<div class="panel-body">
		
		<h4 class="category-slug">Slug : <small>{{ $category->slug }} </small></h5>
		
		<h4 class="category-description"> Description : 
		<small>{{ $category->description }}</small>
	    
	    </h4>
	</div>
	<div class="panel-footer" id="footer">
		<div class="post-info">
			<span class="text-muted pull-right clearfix" id="created-at">
				<i class="fas fa-fw fa-calendar"></i>
				created at: {{ $category->created_at }}</span><br>
		</div>
	</div>
</div>

@endsection