@extends('layouts.master')

@section('content')

@if(count($categories) > 0)
    <h3 class="text-center trashedcategories-count">trashed categories: <span class="badge"> {{ count($categories)}} </span></h3>
@endif
 

@forelse($categories as $category)
<div class="panel panel-default" id="panel">
	<div class="panel-heading" id="headline">
		<h3 class="text-center category-name">{{ $category->name }}</h3>
	</div>
	<div class="panel-body">
		<h4 class="category-slug"><a href=""><a href="/categories/{{$category->id}}"> {{ $category->slug }} </a></h4>
		<p class="category-description">{{ $category->description }}</p>
	</div>
	<div class="panel-footer" id="footer">
		<div class="category-info">
			<span class="text-muted" id="created-at"><i class="fas fa-fw fa-calendar"></i> 
				created at: {{ $category->created_at }}
			</span><br>
			<span class="text-muted" id="created-at"><i class="fas fa-fw fa-calendar"></i> 
				Deleted at: {{ $category->deleted_at }}
			</span>
		</div> 

        <div class="text-center">
	       <a href="/restore/category/{{$category->id}}" class="btn btn-warning btn-sm text-center">restore</a>
        </div>
		
	</div>
</div>



@empty
<h1 class="text-center trashedcategories">
	No DATA TRASHED YET,,,,,
</h1>

@endforelse
@endsection

