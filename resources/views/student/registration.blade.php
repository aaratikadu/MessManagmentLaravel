@extends('layouts.student')

@section('title')
    Registration page
@endsection

@section('body')




<div class="row">
    
    <div class="col m12 s12">
    <div class="card purple lighten-5">
        <div class="card-content">
            <form class="upload" action="{{Route('uploadimage')}}" enctype="multipart/form-data" method="POST">
                {{ csrf_field()}}
                <div class="row">
                    <div class="col m8 s8">
                        <div class="card-title"><h2>Registration</h2>
                        </div>
                    </div>
                    <div class="col s4 m4">
                        <div class="card">
                            <div class="card-image">
                                 <img class="activator" width="100px" height="100px" src="{{asset('images/user.png')}}">
                            </div>
                            <div class="card-action">
                                <input type="file" name="image" value="">
                                <button type="submit" name="button">Upload</button>
                            </div>
                        </div>
                    </div>
                 </div>
            </form>
        <form class="register" action="{{Route('registrationPost')}}" method="POST">
            {{ csrf_field()}}
            <div class="row">
              <div class="input-field col  m6 s12">
                  <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" data-length="10" class="validate" name="name">
                      <label for="icon_prefix">Name</label>
              </div>
              <div class="input-field col m6 s12">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" type="number" data-length="10" class="validate" name="mobile">
                  <label for="icon_telephone">Telephone</label>
              </div>
          </div>

          <div class="row">           
              <div class="input-field col m6 s12">
                <i class="material-icons prefix">email</i>
                <input id="email" type="text"  data-length="10" class="validate" name="email">
                <label for="email">E-mail</label>
              </div>

                        
                  <div class="input-field col m6 s12">
                      <input id="clgname" type="text"  data-length="10"  class="validate" name="college">
                      <label for="clgname">College Name</label>
                  </div>
          </div>
          <div class="row">           
              <div class="input-field col m6 s12">
                  <select name="branch">
                  <option  disabled selected>Branch</option>
                  <option >Computer</option>
                  <option >Electrical</option>
                  <option >Civil </option>
                  <option >machanical</option>
                  <option >Instrumentation</option>
                  <option >Electrinics</option>
                  </select>  
              </div>
              <div class="input-field col m6 s12">
                  <select name="year">
                  <option disabled selected>Year</option>
                  <option>First Year</option>    
                  <option>Last Year</option>
                  <option>Trird Year</option>
                  <option >Last Year</option>
                  </select>
    
              </div>
          </div>
          <div class="row">
                <div class="input-field col  m6 s12">
                      <input  id="dob" type="text" name="dob" class="datepicker">
                      <label for="dob">Date of Birth</label>
                 </div>
                 <div class="input-field col m6 s12">
                  <input id="roomno" type="number" data-length="3" class="validate" name="roomno">
                  <label for="roomno">Room_No</label>
              </div>
          
          </div>      

            <div class="row">           
                  <div class="input-field col m12 s12">
                  <input id="laddress" type="text"  class="validate" name="taddress">
                  <label for="laddress">Local Address</label>
                  </div>
                  <div class="input-field col m12 s12">
                   <input id="paddress" type="text" class="validate" name="paddress">
                    <label for="paddress">Permanant Address</label>
                    </div>
            </div>

            <div class="row">
                <div class="col m12 s12">
                    <button name="smtCustRegister" class="btn waves-effect waves-light" type="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
        
        </form>
        </div>
    </div> 
    @section('scripts')
    <script>
        M.textareaAutoResize($('#feedback'));
    </script>
    @endsection 
@endsection