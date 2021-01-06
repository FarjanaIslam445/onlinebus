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

<form method="post" action="{{route('locationstore')}}">
@csrf
<h2>Add Location</h2>
  <div class="form-group">
    <label for="name"> From</label>
<input type="text" class="form-control"  required id="location_name" name="location_name"placeholder="name">
  </div>
  <div class="form-group">
    <label for="string">Status</label>
    <input type="string" class="form-control"  required id="status" name="status"placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
   </form>
@endsection
  

 
  
