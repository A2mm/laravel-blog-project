@extends('layouts.master')

@section('content')

@if(count($posts) > 0)
    <h3 class="text-center trashedposts-count">Trashed posts:<span class="badge"> {{ count($posts)}} </span></h3>
@endif

@forelse($posts as $post)
<div class="panel panel-default" id="panel">
	<div class="panel-heading" id="headline">
		<h3 class="text-center post-title">{{ $post->title }}</h3>
	</div>
	<div class="panel-body">
		<h4 class="post-description"><a href=""><a href="/posts/{{$post->id}}"> {{ $post->description }} </a></h4>
		<p class="post-content">{{ $post->content }}</p>
	</div>
	<div class="panel-footer" id="footer">
		<div class="post-info">
			<span class="post-author"><i class="fas fa-fw fa-user"></i> By:</span><span> {{ $post->author }}</span>
			<span class="text-muted pull-right clearfix" id="created-at">created at: {{ $post->created_at }}</span><br>
			<span class="post-category"><i class="fas fa-fw fa-tags"></i> Category:</span>
			<span> {{ !empty($post->category->name) ? $post->category->name : 'recently deleted category' }}</span>
			<span class="text-muted pull-right clearfix" id="created-at">Deleted at: {{ $post->deleted_at }}</span>
		</div>

		<div class="text-center">
		<a href="/restore/post/{{$post->id}}" class="btn btn-warning btn-sm text-center">restore</a>
	    </div>
	</div>
</div>

@empty
<h1 class="text-center trashedposts">
	No DATA TRASHED YET,,,,,
</h1>
@endforelse

@endsection