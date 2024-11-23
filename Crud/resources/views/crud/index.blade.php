@extends('layouts.main', ['title' => 'Crud index'])
@section('head')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Student data <a class="float-end" href="{{route('crud.create')}}">Add Student Data</a></h2>
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
                @forelse ($cruds as $crud)
                <tr>
                    <td>{{$crud->id}}</td>
                    <td>{{$crud->name}}</td>
                    <td>{{$crud->email}}</td>
                    <td>{{$crud->phone}}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('crud.edit', $crud->id) }}"
                                class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('crud.destroy', $crud->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Are you sure you want to delete this data?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                            <a href="{{ route('crud.show', $crud->id) }}"
                                class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                        </div>
                    </td>
                    @empty
                    <h3>no list found</h3>
                @endforelse
                </tr>
            </table>
        </div>
    </div>
@endsection
