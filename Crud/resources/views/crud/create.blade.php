@extends('layouts.main', ['title' => 'Crud create'])
@section('head')
@endsection

@section('content')
    <div class="card-header">
        <h2>Add Student <a class="float-end" href="{{url('crud')}}">Back</a></h2>
    </div>
    <div class="card-body">
        <form action="lib/process_student.php" method="post">
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input class="form-control" type="text" name="name" id="name" required="1" />
            </div>

            <div class="form-group">
                <label for="email">Student Email:</label>
                <input class="form-control" type="text" name="email" id="email" required="1" />
            </div>

            <div class="form-group">
                <label for="phone">Student Phone:</label>
                <input class="form-control" type="text" name="phone" id="phone" required="1" />
            </div>

            <div class="form-group">
                <input type="hidden" name="action" value="add" />
                <input class="btn btn-primary" type="submit" name="name" value="Add Student" />
            </div>

        </form>
    </div>
@endsection
