@extends('layouts.admin')

@section('stylesheets')
    
@endsection
@section('title')
    QrScanner
@endsection

@section('body')
    <div class="container">
      <div class="row">
      <div class="col-md-6 col-sm-12 offset-md-3">

        <div class="card">
          <div class="card-body">
            <b>Device has camera: </b>
            <span id="cam-has-camera"></span>
            <br>
            <video muted playsinline id="qr-video" width="100%" height="100%"></video>

          
            <b>Student Email: </b>
            <span id="cam-qr-result">None</span>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="post" action="{{Route('adminAttendace')}}">
        {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <img src="{{asset('images/user.png')}}" id="user_image" height="200px" width="200px" alt="">
          </div>
          <div class="col-md-12">
            <label for="student_name">Student Name</label>
            <input type="text" name="student_name" id="student_name" readonly class="form-control">
          </div>
           <div class="col-md-6">
            <label for="prn">PRN</label>
            <input type="text" name="prn" id="prn" readonly class="form-control">
          </div>
           <div class="col-md-6">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" readonly class="form-control">
          </div>
          <div class="col-md-6">
            <label for="room_no">Room No</label>
            <input type="text" name="room_no" id="room_no" readonly class="form-control">
          </div>
          <div class="col-md-6">
            <label for="branch">Branch</label>
            <input type="text" name="branch" id="branch" readonly class="form-control">
          </div>

          <input type="hidden" name="student_id" id="student_id" value="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Present</button>
      </div>
    </form>
    </div>
  </div>
</div>
    </div>

@endsection



@section('scripts')
    <script type="module">
    import QrScanner from "{{ asset('js/qr-scanner.min.js')}}";
    QrScanner.WORKER_PATH = "{{ asset('js/qr-scanner-worker.min.js')}}";

    const video = document.getElementById('qr-video');
    const camHasCamera = document.getElementById('cam-has-camera');
    const camQrResult = document.getElementById('cam-qr-result');
    
    //const fileSelector = document.getElementById('file-selector');
    //const fileQrResult = document.getElementById('file-qr-result');

    function setResult(label, result) {
        label.textContent = result;
        var studentData = {};
         studentData = getStudentData(result);
        
        if (typeof(studentData.mobile) != 'undefined') {
          console.log('satish');
          console.log(studentData.mobile);
        } 
        
        //alert(result);
        $('#exampleModalCenter').modal('show');
        label.style.color = 'teal';
        
        
        clearTimeout(label.highlightTimeout);
        label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
    }

    // ####### Web Cam Scanning #######

    QrScanner.hasCamera().then(hasCamera => camHasCamera.textContent = hasCamera);

    const scanner = new QrScanner(video, result => setResult(camQrResult, result));
    scanner.start();


function getStudentData(email){
  
  var result_x = {};
  var name;
  $.ajax({
    url: '/ajax/getStudent/email',
    method: 'POST',
    data: {
      'email': email,
      '_token': '{{ csrf_token() }}', 
    },
    success: function(data){
      $('#user_image').attr('src', data.image_url);
      $('#student_name').val(data.name);
      $('#prn').val(data.prn);
      $('#email').val(data.email);
      $('#student_id').val(data.id);
      $('#room_no').val(data.room_no);
      $('#branch').val(data.branch);
     
    },
    error: function(e){
      console.log(e);
    }
  });
  
  return result_x;
}
</script>
@endsection

         
    
    
 
 
