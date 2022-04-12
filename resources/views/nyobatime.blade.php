@extends('layouts.app')
@section('content')
<form action="/store" method="POST">
    @csrf
    <label for="tanggal">Tanggal:</label>
    <input type="datetime" id="tanggal" name="tanggal">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection