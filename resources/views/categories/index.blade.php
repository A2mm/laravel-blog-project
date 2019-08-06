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

@if(Session::has('restored'))
<script type="text/javascript">
            swal({
                title:'Hello',
                text: 'category restored successfully',
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
        <h3 class="text-center category-name"> <a href="/view/category/{{$category->id}}"> {{ $category->name }} </a></h3>
    </div>
    <div class="panel-body">
        <h4 class="category-slug"> {{ $category->slug }}</h4>
        <p class="category-description">{{ substr($category->description, 0, 70) }}...<a href="/view/category/{{$category->id}}">read more</a></p>
    </div>
    <div class="panel-footer" id="footer">
        <div class="category-info">
            <span class="text-muted" id="created-at"><i class="fas fa-fw fa-calendar"></i> 
                created at: {{ $category->created_at }}
            </span>
            <a type="button" href="/view/category/{{ $category->id }}" class="btn btn-info btn-xs pull-right clearfix">
                <span class="glyphicon glyphicon-eye-open"> View </span>
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
