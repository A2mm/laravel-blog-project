@extends('layouts.master')

@section('content')
<div class="row row-create-form">
    <div class="col-md-offset-1 col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Create New Category</h3>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/store/category">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Name</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

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
                                <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug')}}">

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
                        <textarea id="description" class="form-control" rows="7" name="description"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-6">
                                <input type="reset" class="btn btn-default btn-lg" id="reset" value="Reset">
                                <button type="submit" class="btn btn-info btn-lg" id="submit">Add Category</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
</div>
</div>
@endsection