@extends('layouts.student')

@section('title')
    student home page
@endsection

@section('body')


    <!-- Page Layout here -->
      <div class="row">
        <div class="offset-2 col m4 s12">
          <div class="card">
              <div class="card-image">
              <img class="circle" src="{{ $data['image_url'] }}" height="400px">
             </div>
              <div class="card-content">
                <p> Name : <b> {{ $data['name'] }} </b></p>
                <p> PRN : <b> {{ $data['prn'] }}</b></p>
                <p> Room No.  : <b> {{ $data['room_no'] }} </b></p>
                <p> Branch : <b> {{ $data['branch'] }} </b></p>
                
              </div>
              
           </div>
          </div>
      <div class="col m4 s12">
        <!-- Teal page content  -->
          <div class="card">
              <div class="card-image">
                   <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                        ->size(500)->errorCorrection('H')
                        ->generate($data['email'])) !!} ">
              </div>
              <div class="card-content">
                <h4>Scan This QR</h4>
              </div>
          </div>
       </div>  


  </div>

         
    
    
 
 
  </body>
</html>
</div>
</div>
@endsection