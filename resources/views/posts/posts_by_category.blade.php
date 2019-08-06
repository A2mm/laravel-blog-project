@extends('layouts.master')

@section('content')

@if(count($posts) > 0)

<h2 class="text-center category-posts">All Posts of Category {{ $category->name }} 
	<span class="badge count-posts">{{count($posts)}}</span>
</h2>

@endif


@forelse($posts as $post)
<div class="panel panel-default" id="panel">
	<div class="panel-heading" id="headline">
		<h3 class="text-center post-title">{{ $post->title }}</h3>
	</div>
	<div class="panel-body">
		<h4 class="post-description"><a href=""><a href="/posts/{{$post->id}}"> {{ $post->description }} </a></h4>
		<p class="post-content">{{ substr($post->content, 0, 470) }}... <a href="/posts/{{$post->id}}">red more</a></p>
	</div>
	<div class="panel-footer" id="footer">
		<div class="post-info">
			<span class="post-author"><i class="fas fa-fw fa-user"></i> By:</span><span> {{ $post->author }}</span>
			<span class="text-muted pull-right clearfix" id="created-at">created at: {{ $post->created_at }}</span><br>
			<span class="post-category"><i class="fas fa-fw fa-tags"></i> Category:</span><span> {{ $post->category->name}}</span>
		</div>
	</div>
</div>

@empty 
<h1 class="text-center">
	No Posts Within This Categry,,,, 
</h1>
@endforelse

@endsection