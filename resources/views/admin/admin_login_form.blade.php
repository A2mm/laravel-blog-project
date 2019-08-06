@extends('layouts.front')

@section('content')
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-8 col-md-offset-2">

            @if(Session::get('message'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times</button>
                <span> {{ Session::get('message') }} </span>
            </div>
            @endif
            
            <div class="panel panel-info">
                <div class="panel-heading"><span style="font-size: 20px;">Admin Login</span></div>

                <div class="panel-body admin-form">
                    <form class="form-horizontal" method="POST" action="/admin/credentials">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon">@</span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <div class="input-group"> <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span></span>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-6">
                                <button type="submit" name="submit" class="btn btn-success">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
