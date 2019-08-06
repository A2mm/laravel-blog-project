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
                  <li class="cat-item"> 
                    <a href="/view/post/by/category/{{$category->id}}">{{ $category->name }} </a>
                  </li>
            @endforeach 

        @if(Session::get('admin_name'))
                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <i class="fas fa-user"></i>
                                    <span id="user-name">{{ Session::get('admin_name') }}</span> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/admin/dashboard">dashboard</a></li>
                                     <li><a href="/admin/logout">logout</a></li>
                                </ul>
                </li>
        @else
                <li><a href="{{ url('/admin/login') }}"><i class="fas fa-fw fa-sign-in-alt"></i>Admin Login</a></li>
        @endif
       
      </ul> 
    </div>
    </div>  
  </nav>
  </head>

<body id="page-top">
  
                    <div class="row" style="margin-top: 50px; width: 100%">
                          <div class="col-sm-offset-2 col-sm-8 col-md-offset-2 col-sm-10">
                                      @yield('content')
                                      @yield('scripts')
                          </div>
                    </div>

  
</body>
</html>
