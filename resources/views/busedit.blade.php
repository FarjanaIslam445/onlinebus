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

<form method="post" action="{{route('busupdate',$bus->id)}}">
@csrf
<h2>Bus Details Form</h2>
  <div class="form-group">
    <label for="name"> Bus Type</label>
    <select class="form-control" value="{{$bus->bus_type}}"  required id="bus_type"name="bus_type" >
										<option>Coach Type</option>
													<option>AC</option>
													<option>Non AC</option>

													</select>
    
  </div>
  <div class="form-group">
    <label for="string">Seat Capacity</label>
    <select class="form-control" value="{{$bus->seat_capacity}}"   required id="seat_capacity"name="seat_capacity" >
										<option>Seat Capacity</option>
													<option>40</option>
													<option>35</option>
                          <option>30</option>

													</select> 
  </div>
  <div class="form-group">
    <label for="string">Coach Number</label>
    <input type="string" value="{{$bus->coach_number}}" class="form-control" required id="coach_number" name="coach_number"placeholder="">
  </div>
  <div class="form-group">
    <label for="string">Bus Availablity</label>
    <input type="string" value="{{$bus->bus_availablity}}" class="form-control" required id="bus_availablity" name="bus_availablity"placeholder="">
  </div>
  <div class="form-group">
    <label for="string">Seat Availablity</label>
    <input type="string" value="{{$bus->seat_availablity}}" class="form-control" required id="seat_availablity" name="seat_availablity"placeholder="">
  </div>
  
  <div class="form-group">
    <label for="string">Seat Number</label>
    <input type="string" value="{{$bus->seat_number}}" class="form-control" required id="seat_number" name="seat_number"placeholder="">
  </div>

  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection
