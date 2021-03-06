<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    

   <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src="{{asset('js/jquery.min.js')}}"></script>

    


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Bootstrap 4 Dependenices -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
 
    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">

    <!-- Custom CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        

    <!-- Toastr Script -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>


</head>
<body style="background: @if(isset(auth()->user()->userPreference->theme))
                            @if(auth()->user()->userPreference->theme == 'dark')
                                #34495e
                            @else
                                #fafafa
                            @endif
                        @endif
">
    <div id="app">
        <nav class="navbar navbar-expand-sm navi">
            <div class="container-fluid">
                <a class="navbar-brand float-left">
                    <img src="{{asset('images/logo.png')}}" alt="" class="logo">&nbsp;
                    <span class="logotext">Digital SCRUM Board</span>
                </a>
                <h6 class="justify-content-end">
                    <a id="dashboardurl" href="{{ route('dashboard') }}" class="nav_link ">
                        Dashboard
                    </a> 
                    <a id="projectsurl" href="{{ route('project') }}" class="nav_link">
                        Projects
                    </a> 
                    <a id="settingurl" href="{{ route('setting') }}" class="nav_link">
                        Settings
                    </a> 
                    <a href="#" id="dropdown" class="nav_link" style="font-size:1.1em; ">
                        <i class="fas fa-bell"></i>
                    </a> 
                   

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}" class="profile_link"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   
                        <img id="navProfilePicture" 
                         src="{{asset(auth()->user()->image)}}" 

                         alt="No Image" class="pic_logo">
                        <span class="profile_text">
                            {{auth()->user()->name}}&nbsp;
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </a>
                </h6>
            </div>
        </nav>

        <div class="container-fluid">
            <main id="mainContent" class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    
    @yield('styles')
    @yield('scripts')

    <script type="text/javascript">
        $(document).on('click', '#dropdown', function(){
            $(this).append(`<div class="dropdown-menu" show aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>`);
        })
    </script>
    <!-- Script for activating tooltip -->
    <script>

      var url      = window.location.href; 
    $(window).on('load', function(){
      $('[data-toggle="tooltip"]').tooltip();
      // console.log(url);
      if (url == "{{route('dashboard')}}") {
        $('#dashboardurl').addClass("navlink_active"); 
      }else if(url == '{{route('project')}}'){
        $('#projectsurl').addClass("navlink_active"); 
      }else if(url == '{{route('setting')}}'){
        $('#settingurl').addClass("navlink_active"); 
      }
     
    });
    
    </script>
</body>
</html>
