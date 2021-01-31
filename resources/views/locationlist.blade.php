@extends('layouts.backend.app')
@section('content')
<table style="width:100%">

  <tr>
    <th>SL</th>
    <th>From</th>
    <th>To</th>
    
    
    
    
    <th class="text-center">Action</th>
  </tr>
  @foreach($locations as $key=> $locationlist)
  <tr>
     <td>{{$key +1}}</td>
     <td>{{$locationlist->location_name}}</td>
     <td>{{$locationlist->status}}</td>
     
     
     
     
     
     <td class="text-center">
     <a href="{{route('locationedit',$locationlist->id)}}"class="btn btn-primary">Edit</a>
     <a href="{{route('locationdelete',$locationlist->id)}}"class="btn btn-danger">Delete</a>
     
     
     </td>
     
     </tr>

  @endforeach


</table>
@endsection