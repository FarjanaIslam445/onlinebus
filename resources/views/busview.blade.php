@extends('layouts.backend.app')



@section('content')
<div class="container">

<h2>View Bus Data</h2>

<table style="width:100%">
  
  <tr>
    <th>ID</th>
    <th>Bus Type</th>
    <th>Seat Capacity</th>
    <th>Coach Number</th>
    <th>Bus Availablity</th>
    <th>Seat Availablity</th>
    <th>Seat Number</th>
    
    
    <th class="text-center">Action</th>
  </tr>
     @foreach($buses as $key=> $list)

     <tr>
     <td>{{$key +1}}</td>
     <td>{{$list->bus_type}}</td>
     <td>{{$list->seat_capacity}}</td>
     <td>{{$list->coach_number}}</td>
     <td>{{$list->bus_availablity}}</td>
     <td>{{$list->seat_availablity}}</td>
     <td>{{$list->seat_number}}</td>
    
     <td class="text-center">
     <a href="{{route('busedit',$list->id)}}"class="btn btn-primary">Edit</a>
     <a href="{{route('busdelete',$list->id)}}"class="btn btn-danger">Delete</a>
     
     
     </td>
     
     </tr>

     @endforeach

  


</table>

</div>

@endsection