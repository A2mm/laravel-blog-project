<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog System</title>

    <link rel="icon" href="{{ asset('b.ico') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>
    
   
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
    <div class="container">
      
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse"> 
      <span class="sr-only">Toggle navigation</span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
    </button> 
    <a class="navbar-brand" href="/"><i class="fas fa-fw fa-calculator"></i> Blog Project</a> 
    </div> 
    
    <div class="collapse navbar-collapse" id="example-navbar-collapse"> 
      <ul class="nav navbar-nav navbar-right" id="top-menu"> 
        <li><a href="/"><i class="fas fa-fw fa-home"></i> Home</a></li> 
        
            @foreach(App\Category::all() as $category)
                  <li class="cat-item"> <a href="/posts/by/category/{{$category->id}}">{{ $category->name }} </a></li>
            @endforeach 

                    @if(Session::get('admin_name'))
                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                    <span class="admin-name">{{ Session::get('admin_name') }}</span> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu admin-menu" role="menu">
                                    <li><a href="/admin/blog">Blog</a></li>
                                    <li><a href="/admin/profile">Profile</a></li>
                                    <li><a href="/admin/logout">Logout</a></li>
                                </ul>
                    </li>
                    @else
                    <li><a href="/login">login</a></li>
                    <li><a href="/login">register</a></li>
                    @endif
       
      </ul> 
    </div>
    </div>  
  </nav>
  </head>

  <body id="page-top">
  

      <div class="row row-cont">

        <div class="col-xs-5 col-sm-3 col-md-3 col-lg-2 first-sec">
          <div class="sidebar">
          <ul class="list-unstyled">
            <li class="item"><a href="/admin/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i> Dashbord</a></li>
            <hr>
            <li class="head-item"><i class="fas fa-fw fa-book"></i>  Posts 
                <ul class="list-unstyled sub-item"> 
                  <li><a href="/posts"><span class="glyphicon glyphicon-pushpin"></span> All posts</a></li>
                  <li><a href="/add/new/post"><span class="glyphicon glyphicon-plus"></span> Add new post</a></li>
                  <li><a href="/post/actions"><span class="glyphicon glyphicon-pencil"></span> post Actions 
                    <span class="text-muted">(edit/del)</span> </a></li>
                    <li><a href="/trashed/posts"><span class="glyphicon glyphicon-trash"></span> Trashed posts </a></li>
                </ul> 
            </li>
            <hr>
            <li class="head-item"><i class="fas fa-fw fa-tag"></i>  Categories 
                <ul class="list-unstyled sub-item"> 
                  <li><a href="/categories"><span class="glyphicon glyphicon-briefcase"></span> All categories</a></li>
                  <li><a href="/add/new/category"><span class="glyphicon glyphicon-plus"></span> Add new Category</a></li>
                  <li><a href="/category/actions"><span class="glyphicon glyphicon-pushpin"></span>
                   Category Actions <span class="text-muted">(edit/del)</span></a></li>
                   <li><a href="/trashed/categories"><span class="glyphicon glyphicon-trash"></span> Trashed categories </a></li>
                </ul> 
            </li>

          <hr>
          <li class="item"><a href="/books"><i class="fas fa-fw fa-book-open"></i> 404 page</a></li>
          <li class="item"><a href="/Feedback"><i class="fas fa-fw fa-comment"></i> Feedback</a></li>
          <li class="item copy"> &copy; website 2018</li>
        </div>
        </div>

        <div class="col-xs-offset-5 col-xs-7 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-2 col-lg-10">
          <div class="main-part">
            @yield('content')
            @yield('scripts')
        </div>
        </div>

  </div>       
          
</body>
</html>
