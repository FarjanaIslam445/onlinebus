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
<form method="post" action="{{route('routeupdate',$routes->id)}}">
@csrf


<h2>Route Details</h2>
  <div class="form-group">
    <label for="name">To</label>
    <input type="text" class="form-control" value="{{$routes->to}}" required id="to"name="to" placeholder="To">
    </div>
    <div class="form-group">
    <label for="name">From</label>
    <input type="text" class="form-control" value="{{$routes->from}}" required id="from"name="from" placeholder="From">
    </div>
    
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
