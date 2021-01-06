@extends('layouts.backend.app')
@section('content')
<table style="width:100%">
  
  <tr>
    <th>SL</th>
    <th>Date</th>
    <th>Repoting</th>
    <th>Departure</th>
    <th>From</th>
    
    <th>To</th>
    <th>Coach Type</th>
    <th>Price</th>
    

    
    <th class="text-center">Action</th>
  </tr>

  
  

   
  </tr>
  @foreach($trips as $key=> $triplist)
  
  <tr>
     <td>{{$key +1}}</td>
     <td>{{$triplist->date}}</td>
     <td>{{$triplist->reporting}}</td>
     <td>{{$triplist->departure}}</td>
     
     <td>{{$triplist->location->location_name}}</td>
     
     <td>{{$triplist->locationto->location_name}}</td>
     <td>{{$triplist->bus_type}}</td>
     <td>{{$triplist->price}}</td>

     
     

     
     
     
     <td class="text-center">
   
   <a href="{{route('tripdelete',$triplist->id)}}" class="btn btn-danger">Delete</a>
   
   </td>
     
     </tr>

  @endforeach



  


</table>
@endsection