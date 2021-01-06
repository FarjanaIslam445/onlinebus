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
<form method="post" action="{{route('locationupdate',$locations->id)}}">
@csrf


<h2>Edit Location</h2>
  <div class="form-group">
    <label for="name">From</label>
    <input type="text" class="form-control" value="{{$locations->location_name}}" required id="location_name"name="location_name" placeholder="From">
    </div>
    <div class="form-group">
    <label for="name">To</label>
    <input type="text" class="form-control" value="{{$locations->status}}" required id="status"name="status" placeholder="">
    </div>
    
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
