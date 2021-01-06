@extends('layouts.backend.app')
@section('content')
<table style="width:100%">

  <tr>
  <th>SL</th>
    <th>From</th>
    <th>To</th>
    
    
    
    
    <th class="text-center">Action</th>
  </tr>
  @foreach($routs as $key=> $routlist)
  <tr>
     <td>{{$key +1}}</td>
     <td>{{$routlist->from}}</td>
     <td>{{$routlist->to}}</td>
     
     
     
     
     
     <td class="text-center">
     <a href="{{route('routeedit',$routlist->id)}}"class="btn btn-primary">Edit</a>
     <a href="{{route('routedelete',$routlist->id)}}"class="btn btn-danger">Delete</a>
     <a href=""class="btn btn-warning">View</a>
     
     </td>
     
     </tr>

  @endforeach


</table>
@endsection