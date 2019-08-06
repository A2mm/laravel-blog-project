@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-offset-2 col-md-8">
    
          <div class="panel panel-default">

            <div class="panel-heading category-updating">
                <h3> Updating category </h3>
            </div>
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/updating/category">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $category->id }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Name</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug" class="col-md-2 control-label">Slug</label>

                            <div class="col-md-10">
                                <input id="slug" type="text" class="form-control" name="slug" value="{{ $category->slug }}">

                                @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-2 control-label">Description</label>

                            <div class="col-md-10">
                        <textarea id="description" class="form-control" rows="7" name="description">
                            {{ $category->description }}
                        </textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
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


    </div>
</div>
      
@endsection

