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
<form method="post" action="{{route('cinput')}}">
@csrf

<h2>Counter Details </h2>
  <div class="form-group">
    <label for="name">Counter Location</label>
    <select class="form-control"required id="location"name="location" >
    <option>Counter Location</option>
													<option>Sirajganj</option>
													<option>Veramara</option>
													<option>Kushtia</option>
													</select>
  </div>
  <div class="form-group">
    <label for="name">Phone</label>
    <input type="text" class="form-control" required id="phone" name="phone"placeholder="Phone">
  </div>
  
 
    
  

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
