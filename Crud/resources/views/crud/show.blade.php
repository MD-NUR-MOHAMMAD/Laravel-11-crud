@extends('layouts.main', ['title' => 'Curd show'])
@section('content')
<h1>Curd Show</h1>
<h3>{{ $crud->name }}</h3>
<h3>{{ $crud->email }}</h3>
<p>{{ $crud->phone }}</p>
<hr>
<a class="btn btn-primary" href="{{route('crud.edit', $crud->id)}}">Edit</a>
<a class="btn btn-primary" href="{{route('crud.index')}}">Back</a>
@endsection
