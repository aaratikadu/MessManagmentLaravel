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
            <li><a href="#">Verify Rgistration</a></li>
            <li><a href="#">Student Details</a></li>
            <li><a href="#">Set Todays Menu</a></li>
            <li><a href="#">Manage Plates</a></li>
            <li><a href="#">Remainning Students</a></li>
            <li><a href="#">Check Fees Details</a></li>
            <li><a href="#">Recharge Verification</a></li>
            <li><a href="#">Log out</a></li>

            </ul>
        </div>
        </nav>
    </div>
    
    <div class="container">
    
    @yield('body')

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>