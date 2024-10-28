@extends('layouts.main', ['title' => 'Crud index'])
@section('head')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Student data <a class="float-end" href="{{url('crud/add')}}">Add Student Data</a></h2>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Nurmohammad</td>
                    <td>nur@gmail.com</td>
                    <td>01677772333</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('crud/edit')}}?id=1">Edit</a>
                        <a class="btn btn-danger" href="deletestudent.php?id=1"
                            onclick="return confirm('Are you sure to Delete?')">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Asif</td>
                    <td>asif@gmail.com</td>
                    <td>01677772233</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('crud/edit')}}?id=1">Edit</a>
                        <a class="btn btn-danger" href="deletestudent.php?id=1"
                            onclick="return confirm('Are you sure to Delete?')">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Rana</td>
                    <td>rana@gmail.com</td>
                    <td>01677772331</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('crud/edit')}}?id=1">Edit</a>
                        <a class="btn btn-danger" href="lib/process_student.php? action=delete&id=1"
                            onclick="return confirm('Are you sure to Delete?')">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
