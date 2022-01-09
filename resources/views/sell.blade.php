@extends('compoent.main')
@section('title','Shwe Myanmar Car Showroom')
@section('content')


<!-- Sell All Car -->

<div class="container" style="margin-bottom:40px;margin-top: 40px;">

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Text">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Car Image </label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Phone">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> Confirm our term and conditions</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
</div>


@endsection