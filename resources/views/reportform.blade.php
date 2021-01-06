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
<form method="post" action="{{route('reportstore')}}">
@csrf


<h2>Report Form</h2>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" required id="name"name="name" placeholder="Enter Reporter Name">
    
    </div>
    <div class="form-group">
    <label for="address">Details</label>
    <textarea name="details" required id="details" cols="30" rows="3"class="form-control"></textarea>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Book Now</button>
</form>


@endsection
