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
        <a href="#!" class="brand-logo"><i class= "large material-icons">local_dining</i> MMS</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{{Route('registrationView')}}">Registration</a></li>
          <li><a href="{{Route('menupageView')}}">Today's Special Menu</a></li>
          <li><a href="#">Fees Detail</a></li>
          <li><a href="#">account</a></li>
          <li><a href="{{Route('feedbackView')}}">Feedback</a></li>
          <li><a href="#">logout</a></li>

        </ul>
      </div>
    </nav>
  </div>
    <div class="container">
  
       
    
    @yield('body')

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('flash')
    @yield('scripts')
</body>
</html>