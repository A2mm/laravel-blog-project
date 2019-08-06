@extends('layouts.front')

@section('content')

<div class="panel panel-default" id="panel" style="margin-top: 50px;">
	<div class="panel-heading" id="headline">
		<h2 class="text-center post-title">{{ $post->title }}</h2>
	</div>
	<div class="panel-body">
		<h3 class="post-description">{{ $post->description }}</h3>
		<p class="post-content">{{ $post->content }} </p>
	</div>
	<div class="panel-footer" id="footer">
		<div class="post-info">
			<span class="post-author"><i class="fas fa-fw fa-user"></i> By:</span><span> {{ $post->author }}</span>
			<span class="text-muted pull-right clearfix" id="created-at">created at: {{ $post->created_at }}</span><br>
			<span class="post-category"><i class="fas fa-fw fa-tags"></i> Category:</span>
			<span> {{ !empty($post->category->name) ? $post->category->name : 'recently deleted category' }}</span>
		</div>
	</div>
</div>

@endsection