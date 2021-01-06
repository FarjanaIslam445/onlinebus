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
<form method="post" action="{{route('busint')}}">
@csrf


<h2> Add Buses</h2>
  
  <div class="form-group">
    <label for="name">Bus Type</label>
    <input type="string" class="form-control" required id="bus_type" name="bus_type"placeholder="">
									
  </div>
  <div class="form-group">
    <label for="contact">Seat Capacity</label>
    
										<select class="form-control"required id="seat_capacity"name="seat_capacity" >
										<option>Seat Capacity</option>
													<option>40</option>
													<option>35</option>
                          <option>30</option>

													</select>
  </div>
  <div class="form-group">
    <label for="contact">Coach Number</label>
    <input type="string" class="form-control" required id="coach_number" name="coach_number"placeholder="">
  </div>
  <div class="form-group">
    <label for="contact">Bus Availability</label>
    <input type="string" class="form-control" required id="bus_availablity" name="bus_availablity"placeholder="">
  </div>
 
  <div class="form-group">
    <label for="contact">Seat Availability</label>
    <input type="string" class="form-control" required id="seat_availablity" name="seat_availablity"placeholder="">
  </div>
  <div class="form-group">
    <label for="contact">Seat Number</label>
    <input type="string" class="form-control" required id="seat_number" name="seat_number"placeholder="">
  </div>
    
  

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
