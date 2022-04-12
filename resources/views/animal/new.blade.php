@extends('layouts.app')

@section('title', 'Animal Crud')

@section('header', 'New List Animal')

@section('content')
<form action="StoreAnimal" method="POST" enctype="multipart/form-data">
  @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
    <div class="mb-3">
      <label for="formFile" class="form-label">Animal Image</label>
      <input class="form-control" type="file" id="image" name="image">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Animal Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <label for="name" class="form-label">Number of Feet</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="number_of_feet" id="number_of_feet" value="2 Feet">
      <label class="form-check-label" for="flexRadioDefault1">
        2 Feet
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="number_of_feet" id="number_of_feet" value="4 Feet" >
      <label class="form-check-label" for="flexRadioDefault2">
        4 Feet
      </label>
    </div>
    <div class="mb-3 mt-3">
      <label for="exampleInputPassword1" class="form-label">Animal Description</label>
      <textarea  class="form-control" id="description" name="description"></textarea>
    </div>
      <button type="submit" class="btn btn-primary">Save</button>
      <a type="button" class="btn btn-success" href="/">Back</a>
  </form>
@endsection 