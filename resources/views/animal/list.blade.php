@extends('layouts.app')

@section('title', 'Animal Crud')

@section('header', 'Animal List')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<a type="button" class="btn btn-primary" href="NewList">Add New List</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Animal Image</th>
        <th scope="col">Animal Name</th>
        <th scope="col">Number of feet</th>
        <th scope="col">Animal Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($animals as $animal )
       <tr>
            <th scope="row">{{ $loop->index+1+($animals->currentPage()-1)*5 }}</th>
            <td><img src="{{ asset('storage/' . $animal->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $animal->name }}</td>
            <td>{{ $animal->number_of_feet }}</td>
            <td>{{ Str::limit($animal->description, 50) }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-primary" href="/{{ $animal -> id }}/Details">Details</a>
                    <a type="button" class="btn btn-success" href="/{{ $animal -> id }}/Edit">Edit</a>
                    <a type="button" class="btn btn-danger" href="/{{ $animal -> id }}/Delete">Delete</a>
                </div>
            </td>
            
        </tr>
    @endforeach
  </tbody>
</table>
{{ $animals->links() }}

@endsection