@extends('layouts.student')

@section('title')
    student home page
@endsection

@section('body')
    <div class="row">
        <div class="col m12">
      <style>
          body {
          background-image:url("assets/images/bg.jpg");
          height: 100%; 
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
            }
      </style>

  
 
        

    <!-- Page Layout here -->
      <div class="row">
        <div class="offset-2 col m4 s12">
          <div class="card">
              <div class="card-image">
                <img src="assets/images/avatar.png">
                <span class="">     Aarati Niwas Kadu</span>
             </div>
              <div class="card-content">
                <p>PRN: 1742201 <br>
                class : Ty Comp</p>
              </div>
              <div class="card-action">
                <a href="#">Account Details</a>
              </div>
           </div>
          </div>
      <div class="col m4 s12">
        <!-- Teal page content  -->
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                   <img class="activator" src="{{asset('images/qrcode.png')}}">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">QR-Code<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Record of Plaits</a></p>
              </div>
              <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                   <p>Date:12.12.72<br>
                     Scan Limit</p>
              </div>
          </div>
       </div>        

  </div>
</div>
         
    
    
 
 
  </body>
</html>
</div>
</div>
@endsection