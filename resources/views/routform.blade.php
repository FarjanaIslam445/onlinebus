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
<form method="post" action="{{route('routstore')}}">
@csrf


<h2>Route Details</h2>
  <div class="form-group">

    <span class="form-label">From</span>
								<select class="form-control"required id="from"name="from" >
								<option>From</option>
													<option>Khulna</option>
													<option>Dhaka</option>
													<option>Rajshahi</option>
													<option>Kushtia</option>
													<option>Chittagong</option>
													<option>Sylhet</option>
													<option>Barishal</option>
													</select>

    </div>
    <div class="form-group">
    
    <span class="form-label">To</span>
								<select class="form-control"required id="to"name="to" >
								<option>To</option>
													<option>Khulna</option>
													<option>Dhaka</option>
													<option>Rajshahi</option>
													<option>Kushtia</option>
													<option>Chittagong</option>
													<option>Sylhet</option>
													<option>Barishal</option>
													</select>

    </div>
    
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
