@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8">
   
            <div class="panel panel-default">
                
                <div class="panel-heading updating-post">
                    <h3> Updating post data </h3>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/update/post">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="id" value="{{$post->id}}">

                        <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                            <label for="author" class="col-md-2 control-label"> Author </label>

                            <div class="col-md-10">
                                <input id="author" type="text" class="form-control" name="author" value="{{ $post->author }}">

                                @if ($errors->has('author'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-2 control-label">Title</label>

                            <div class="col-md-10">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-2 control-label">Description</label>

                            <div class="col-md-10">
                            <input id="description" type="text" class="form-control" name="description" value="{{ $post->description }}">

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-2 control-label">Content</label>

                            <div class="col-md-10">
                                <textarea id="content" class="form-control" name="content" rows="8">
                                    {{ trim($post->content) }}
                                </textarea>
                                
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-2 control-label">Category</label>

                            <div class="col-md-10">
                                <select class="form-control" name="category_id" id="category">
                                    @foreach(App\Category::all() as $category)
            <option value="{{$category->id}}" {{$post->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close </button> 
                                <button type="submit" class="btn btn-success"> Submit changes </button> 
                            </div>
                        </div>

                    </form>
                </div>
            </div>

@endsection

     
    </div>
</div>