@extends('layouts.master')

@section('content')

@if(Session::has('update'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'Post Updated Successfully',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif

@if(Session::has('tempdelete'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'post deleted temporarily',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif

@if(Session::has('permdelete'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'post deleted permanently',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif

@foreach($posts as $post)
<div class="one"></div>
<div class="panel panel-default" id="panel">
	<div class="panel-heading" id="headline">
		<h2 class="text-center post-title">{{ $post->title }}</h2>
	</div>
	<div class="panel-body">
		<h3 class="post-description"><a href=""><a href="/view/postdetails/{{$post->id}}"> {{ $post->description }} </a></h3>
		<p class="post-content">{{ substr($post->content, 0, 470) }}... <a href="/view/postdetails/{{$post->id}}">read more</a></p>
	</div>
	<div class="panel-footer" id="footer">
		<div class="post-info">
			<span class="post-author"><i class="fas fa-fw fa-user"></i> By:</span><span> {{ $post->author }}</span>
			<span class="text-muted pull-right clearfix" id="created-at">created at: {{ $post->created_at }}</span><br>
			<span class="post-category"><i class="fas fa-fw fa-tags"></i> Category:</span>
			<span> {{ !empty($post->category->name) ? $post->category->name : 'recently deleted category' }}</span>
		</div>

		<div class="text-center post-actions">

			<a href="/post/editing/{{$post->id}}" type="button"  class="btn btn-xs btn-info editing-post">
				<span class="glyphicon glyphicon-edit"></span> Edit/Update
			</a>

			<a href="#" id="{{$post->id}}" type="button" class="btn btn-xs btn-danger temp-deleting-post">
				<span class="glyphicon glyphicon-trash"></span> Temp Del
			</a>

			<a href="#" id="{{$post->id}}" type="button" class="btn btn-xs btn-danger perm-deleting-post">
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


<div class="text-center">{{ $posts->links() }}</div>
@endsection


@section('scripts')
@include('scripts.dynamic-posts')
@endsection
