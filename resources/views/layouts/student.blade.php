<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    @yield('stylesheets')
</head>
<body>
        <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper pink darken-1 ">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="{{ route('home') }}" class="brand-logo"><i class= "large material-icons">local_dining</i> MMS</a>
        <ul class="right hide-on-med-and-down">
          
          
          @guest
           <li><a href="{{Route('registrationView')}}">Registration</a></li>
           <li><a href="{{Route('login')}}">Login</a></li>
          @else 

          <li><a href="{{Route('home')}}">Home</a></li>
          <li><a href="{{Route('menupageView')}}">Today's Special Menu</a></li>
          <li><a href="#">Fees Detail</a></li>
          <li><a href="#">account</a></li>
          <li><a href="{{Route('feedbackView')}}">Feedback</a></li>
            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
          @endguest

        </ul>
      </div>
    </nav>
  </div>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="{{asset('images/bg.jpg')}}">
      </div>
      <a href="#user"><img class="circle" src="{{ asset('images/avatar.png') }}"></a>
      @guest
        
      @else
        <a href="#name"><span class="white-text name">{{Auth::user()->name}}</span></a>
        <a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
      @endguest
      
    </div></li>
    @guest
      @else
      <li><a href="{{Route('home')}}"><i class="material-icons green-text">home</i> Home</a></li>
          <li><a class="waves-effect" href="{{Route('menupageView')}}"><i class="material-icons green-text">room_service</i> Today's Special Menu</a></li>
          <li><a class="waves-effect" href="#"><i class="material-icons green-text">credit_card</i> Fees Detail</a></li>
          <li><a class="waves-effect" href="#"><i class="material-icons green-text">account_balance_wallet</i>  Account</a></li>
          <li><a class="waves-effect" href="{{Route('feedbackView')}}"><i class="material-icons green-text">feedback</i>  Feedback</a></li>
    @endguest
    
    <li><div class="divider"></div></li>
    
    @guest
    @else
    <li>
                                        <a class="waves-effect" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="material-icons red-text">lock_open</i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
    @endguest
  </ul>
  
  
       
    
    @yield('body')

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('flash')
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
    @yield('scripts')
</body>
</html>