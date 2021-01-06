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
<form method="post" action="{{route('counterupdate',$counters->id)}}">
@csrf

<h2>Counter Details </h2>
  <div class="form-group">
    <label for="name">Counter Location</label>
    <input type="string" class="form-control"value="{{$counters->location}}" required id="location"name="location" placeholder="Counter Location">
    
  </div>
  <div class="form-group">
    <label for="name">Phone</label>
    <input type="text" class="form-control"value="{{$counters->phone}}" required id="phone" name="phone"placeholder="Phone">
  </div>
  
 
    
  

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
