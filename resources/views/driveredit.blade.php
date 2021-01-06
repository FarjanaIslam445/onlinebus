@extends('layouts.backend.app')


@section('content')
@if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

<form method="post" action="{{route('driverupdate',$drivers->id)}}">
@csrf
<h2>Driver Details Form</h2>
  <div class="form-group">
    <label for="name"> Name</label>
    <input type="text" value="{{$drivers->name}}" class="form-control" required id="name"name="name" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="string">Age</label>
    <input type="number" value="{{$drivers->age}}" class="form-control" required id="number" name="age"placeholder="Enter Age">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="phone" value="{{$drivers->phone}}" class="form-control" required id="phone" name="phone"placeholder="Enter  Phone Number">
  </div>
  
  <div class="form-group">
    <label for="contact">Voter ID No</label>
    <input type="string" class="form-control" value="{{$drivers->vote_id_no}}"  required id="vote_id_no" name="vote_id_no"placeholder="">
  </div>

  <div class="form-group">
    <label for="contact">Driver Licence No</label>
    <input type="string" class="form-control" value="{{$drivers->driver_licence_no}}"  required id="driver_licence_no" name="driver_licence_no"placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection
