@extends('layouts.admin')

@section('stylesheets')
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
@endsection

@section('title')
    View All Requests
@endsection

@section('body')
    <div class="container">
        <div class="row">
        <div class="col-md-12  "> <br><h3 class="center-align">Requested Students</h3><hr> </div>
        <div class="col-md-12 ">
            <table class="table table-striped table-hover" id="studentTable">
                <thead class="bg-primary">
                    <th>Student Name</th>
                    <th>PRN</th>
                    <th>Room No</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Approve</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->prn }}</td>
                            <td>{{ $student->room_no }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>
                                <a class="btn btn-outline-success" href="/admin/request/approve/{{ $student->id }}"> Approve </a>
                            </td>
                            <td>
                                <a class="btn btn-outline-danger" href="/admin/request/delete/{{ $student->id }}"> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#studentTable').DataTable();
        } );
    </script>
@endsection
