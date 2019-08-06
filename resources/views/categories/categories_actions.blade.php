@extends('layouts.master')

@section('content')

@if(Session::has('create'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'category added successfully',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif

@if(Session::has('update'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'category updated successfully',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif

@if(Session::has('tempdelete'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'category deleted temporarily',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif

@if(Session::has('permdelete'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'category deleted permanently',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif

<h4 class="text-center categories-number">Number of All Categories: 
	<span class="badge count-categories">{{ count($categories) }}</span>
</h4>

@foreach($categories as $category)
<div class="panel panel-default" id="panel">
	<div class="panel-heading" id="headline">
		<h3 class="text-center category-name">{{ $category->name }}</h3>
	</div>
	<div class="panel-body">
		<h4 class="category-slug"><a href=""><a href="/view/category/{{$category->id}}"> {{ $category->slug }} </a></h4>
		<p class="category-description">{{ substr($category->description, 0, 70) }}...<a href="/view/category/{{$category->id}}">read more</a></p>
	</div>
	<div class="panel-footer" id="footer">
		<div class="category-info">
			<span class="text-muted" id="created-at"><i class="fas fa-fw fa-calendar"></i> 
				created at: {{ $category->created_at }}
			</span><br>
		</div>

		<div class="text-center category-actions">

			<a href="/category/editing/{{$category->id}}" type="button"  class="btn btn-xs btn-info editing-category">
				<span class="glyphicon glyphicon-edit"></span> Edit/Update
			</a>

			<a href="#" id="{{$category->id}}" type="button" class="btn btn-xs btn-danger temp-deleting-category">
				<span class="glyphicon glyphicon-trash"></span> Temp Del
			</a>

			<a href="#" id="{{$category->id}}" type="button" class="btn btn-xs btn-danger perm-deleting-category">
				<span class="glyphicon glyphicon-remove"></span> Perm Del
			</a>

		</div>
	</div>
</div>

@endforeach

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
				<h4 class="modal-title" id="myModalLabel"></h4> 
			</div> 
			<div class="modal-body"></div> 
		</div>
	</div>
</div>

@endsection


@section('scripts')
@include('scripts.dynamic-categories')
@endsection
