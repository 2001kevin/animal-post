@extends('layouts.app')

@section('title', 'Animal Crud')

@section('header', 'Animal Details')

@section('content')
    <div >
      <label for="name" class="form-label">Animal Image</label>
    </div>
      <img src="{{ asset('storage/' . $animals->image) }}" height="200" width="200" class="img-thumbnail" alt="...">
    <div class="mb-3 mt-3">
      <label for="name" class="form-label">Animal Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $animals->name }}" readonly>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Number of Feet</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $animals->number_of_feet }}" readonly>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Animal Description</label>
      <textarea  class="form-control" id="description" name="description" readonly>{{ $animals->description }}</textarea>
    </div>
    <a type="button" class="btn btn-success" href="/">Back</a>
@endsection