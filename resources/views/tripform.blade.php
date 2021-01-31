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
<form method="post" action="{{route('tripstore')}}">
@csrf


<h2>Add Trip</h2>
  <div class="form-group">
    <label for="name">Date</label>
    <input type="date" class="form-control" required id="date"name="date" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="time">Reporting</label>
    <select class="form-control"required id="reporting"name="reporting" >
                          <option>Reporting</option>
					      <option>Morning(6:00 AM)</option>
                <option>Morning(7:00 AM)</option>
                <option>Morning(10:00 AM)</option>
						  <option>Afternoon(12:00 PM)</option>
              <option>Afternoon(3:00 PM)</option>
              <option>Afternoon(5:00 PM)</option>
              <option>Night(7:00 PM)</option>
              <option>Night(8:00 PM)</option>
              <option>Night(10:00 PM)</option>


	</select>
    
  </div>
  <div class="form-group">
    <label for="contact">Departure</label>
    <select class="form-control"required id="departure"name="departure" >
                          <option>Reporting</option>
					      <option>Morning(6:15 AM)</option>
                <option>Morning(7:15 AM)</option>
                <option>Morning(10:15 AM)</option>
						    <option>Afternoon(12:15 PM)</option>
                <option>Afternoon(3:15 PM)</option>
                <option>Afternoon(5:15 PM)</option>
                <option>Night(7:15 PM)</option>
                <option>Night(8:15 PM)</option>
                <option>Night(10:15 PM)</option>
    </select>
    <div class="form-group">
    <label for="contact">Bus Type</label>
    <select class="form-control"required id="bus_type"name="bus_type" >
                          <option>Bus Type</option>
                        	@foreach($buses as $bus)

													<option>{{$bus->bus_type}}</option>
													
													
													@endforeach

					     
    </select>                      
  </div>
  <div class="form-group">
    <label for="contact">From</label>
    	<select class="form-control"required id="location_from"name="location_from" >
								<option>From</option>

											@foreach($locations as $location)

													<option value="{{$location->id}}">{{$location->location_name}}</option>
													
													
													@endforeach

													</select>
  </div>
  <div class="form-group">
    <label for="contact">To</label>
    <select class="form-control"required id="location_to"name="location_to" >
								<option>To</option>

											@foreach($locations as $location)

													<option  value="{{$location->id}}">{{$location->location_name}}</option>
													
													
													@endforeach

													</select>
  </div>
  <div class="form-group">
    <label for="contact">Price</label>
    <input type="number" class="form-control" required id="price" name="price"  min="0" oninput="validity.valid||(value='')"; placeholder="">
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
