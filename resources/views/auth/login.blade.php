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
    <title> Login Please</title>

</head>
<body>
  
  <div class="row">
      <div class="col m12 s12 "> <h3 class="center-align"> Login Please </h3></div>
        <div class="col m4 offset-m4 s12">
            <div class="card">
                <div class="card-content">
                    <form action="#" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field s12 m12">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field s12 m12">
                                <input type="password" id="password" name="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="col m12 s12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m12 s12">
                                <button type="submit" class="btn green waves-effect">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        @if ($errors->has('password'))
            swal("Error", "{{ $errors->first('password') }}", "error");
        @endif
        @if ($errors->has('email'))
            swal("Error", "{{ $errors->first('email') }}", "error");
        @endif
    </script>
</body>
</html>





    
