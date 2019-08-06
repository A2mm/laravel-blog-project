@extends('layouts.front')

@section('content')

@if(Session::has('create'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'post added successfully',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif


@if(Session::has('restored'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'post restored successfully',
                icon: 'success',
                button: 'yes'

            });
</script>
@endif

@if(count($posts) > 0)
<h1 class="text-center all-posts">ALL BLOG POSTS <span class="badge" style="background: green">{{$posts->total()}}</span></h1>
@endif
@forelse($posts as $post)
<div class="panel panel-default" id="panel">
	<div class="panel-heading" id="headline">
		<h3 class="text-center post-title"> <a href="/view/post/{{ $post->id }}"> {{ $post->title }} </a></h3>
	</div>
	<div class="panel-body">
		<h4 class="post-description"> {{ $post->description }} </h4>
		<p class="post-content">{{ substr($post->content, 0, 100) }}... <a href="/view/post/{{$post->id}}">read more</a></p>
	</div>
	<div class="panel-footer" id="footer">
		<div class="post-info">
			<span class="post-author"><i class="fas fa-fw fa-user"></i> By:</span><span> {{ $post->author }}</span>
			<span class="text-muted pull-right clearfix" id="created-at">created at: {{ $post->created_at }}</span><br>
			<span class="post-category"><i class="fas fa-fw fa-tags"></i>Category:</span>
			<span> {{ !empty($post->category->name) ? $post->category->name : 'recently deleted category' }}</span>
			<a type="button" href="/view/post/{{ $post->id }}" class="btn btn-info btn-xs pull-right clearfix">
				<span class="glyphicon glyphicon-eye-open"> </span> View details
			</a>
		</div>
	</div>
</div>

@empty
<h1 class=" text-center noposts">NO Posts Add Post right Now.....</h1>
@endforelse

<div class="text-center">{{ $posts->links() }}</div>
@endsection