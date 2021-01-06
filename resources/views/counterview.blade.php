@extends('layouts.backend.app')
@section('content')
<table style="width:100%">

  <tr>
  <th>SL</th>
    <th>Couter Location</th>
    <th>Phone</th>
    
    
    <th class="text-center">Action</th>
  </tr>
  @foreach($counters as $key=> $counterview)
  <tr>
     <td>{{$key +1}}</td>
     <td>{{$counterview->location}}</td>
     
     <td>{{$counterview->phone}}</td>
     
     <td class="text-center">
     <a href="{{route('counteredit',$counterview->id)}}"class="btn btn-primary">Edit</a>
     <a href="{{route('counterdelete',$counterview->id)}}"class="btn btn-danger">Delete</a>
     <a href=""class="btn btn-warning">View</a>
     
     </td>
     
     </tr>

  @endforeach


</table>
@endsection