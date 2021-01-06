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
<form method="post" action="{{route('tripupdate',$trip->id)}}">
@csrf


<h2>Trip Dretails</h2>
<div class="form-group">
    <label for="email">Date</label>
    <input type="date" class="form-control" value="{{$trip->date}}"  required id="date" name="date"placeholder="Enter Date">
  </div>
    

  <div class="form-group">
  <span class="form-label">Reporting</span>
										<select class="form-control" value="{{$trip->reporting}}" required id="reporting"name="reporting" >
										<option>Time</option>
													<option>Morning(6:00am)</option>
													<option>Afternoon(12:00pm)</option>
													<option>Night(7:00pm)</option>
													</select>
    
    <div class="form-group">
    <label for="name">Departure</label>
    
    <select class="form-control" value="{{$trip->departure}}" required id="departure"name="departure" >
										<option>Departure</option>
													<option>Morning(6:15am)</option>
													<option>Afternoon(12:15pm)</option>
													<option>Night(7:15pm)</option>
													</select>
  
  
   <div class="form-group">
    <label for="contact">Bus Type</label>
    <select class="form-control"   required id="bus_type"name="bus_type" >
                          <option>Bus Type</option>
                        	@foreach($buses as $bus)

													<option>{{$bus->bus_type}}</option>
													
													
													@endforeach

					     
    </select>                      
  
  
  
  
    <div class="form-group">
    <label for="name">Boarding</label>
    <select class="form-control" value="{{$trip->boarding}}"required id="boarding"name="boarding" >
										<option>Boarding</option>
													<option>Kollanpur</option>
													<option>Abdullahpur</option>
													<option>Gabtoli</option>
                                                    <option>Malibag</option>
													</select>
  
    
   
    <div class="form-group">
    <label for="name">Destination</label>
    <select class="form-control" value="{{$trip->destination}}"required id="destination"name="destination" >
                                                 <option>Destination</option>
													<option>Sirajganj</option>
													<option>Veramara</option>
													<option>Kushtia</option>
                                                    <option>Khulna</option>
													<option>Dhaka</option>
													<option>Rajshahi</option>
                                                    <option>Chittagong</option>
													<option>Sylhet</option>
													<option>Barishal</option>

													</select>

    <div class="form-group">
    
    <label for="name">Standard BDT</label>
    <input type="number" class="form-control" value="{{$trip->standard_bdt}}"required id="standard_bdt"name="standard_bdt" placeholder="">

    <div class="form-group">
    <label for="name">Business BDT</label>
    <input type="number" class="form-control" value="{{$trip->business_bdt}}" required id="business_bdt"name="business_bdt" placeholder="">
    
    
 
  <button type="submit" class="btn btn-primary">update</button>
</form>


@endsection
