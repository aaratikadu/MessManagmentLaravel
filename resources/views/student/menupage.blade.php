
@extends('layouts.student')

@section('title')
    Testing page
@endsection

@section('body')
<div class="row">
    <div class="col s12 m12">
        <div class="card purple lighten-5">
            <div class="card-content">
                <span class="card-title"><h3 >Today's Special Menu</h3></span>
                <div class="row">
                    <div class="col s12 m12">
                        <div class="carousel">
                            <a class="carousel-item" href="#one!"><img width="400px" height="200px" src="{{asset('images/anda.jpg')}}"></a>
                            <a class="carousel-item" href="#two!"><img width="400px" height="200px" src="{{asset('images/shewbhaji.jpg')}}"></a>
                            <a class="carousel-item" href="#three!"><img width="400px" height="200px" src="{{asset('images/sabudana.jpg')}}"></a>
                            <a class="carousel-item" href="#four!"><img width="400px" height="200px" src="{{asset('images/khichdi.jpg')}}"></a>
                            <a class="carousel-item" href="#five!"><img width="400px" height="200px" src="{{asset('images/prate.jpg')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      

<div class="row">
    <div class="col m12 s12 card">
        <div class="card-content">
            <span class="card-title">Food Chart</span>
            <table>
                <tr>
                    <th>Day</th>
                    <th>Food</th>
                </tr>
                <tr>
                    <td>MONDAY</td>
                    <td>Anda kari, Roti, chapati</td>
                </tr>

                <tr>
                    <td>MONDAY</td>
                    <td>Anda kari, Roti, chapati</td>
                </tr>

                <tr>
                    <td>TUESDAY</td>
                    <td>Anda curry, Roti</td>
                </tr>
            
                <tr>
                    <td>WEDNESDAY</td>
                    <td>Kaju curry, Roti</td>
                </tr>

                <tr>
                    <td>TRUSDAY</td>
                    <td>bringle greel, Roti, chapati</td>
                </tr>
            
                <tr>
                    <td>FRIDAY</td>
                    <td>Khichadi </td>
                </tr>
            
                <tr>
                    <td>TRUSDAY</td>
                    <td>Mix-Veg Roti, chapati</td>
                </tr>

                <tr>
                    <td>SUNDAY</td>
                    <td>Warnbatti </td>
                </tr>
            
            
            </table>
        </div>
    </div>
</div>
@section('scripts')
<script>
        $(document).ready(function () {
            $('.carousel').carousel();
        });
      </script>
@endsection
</div>
    </div>

@endsection