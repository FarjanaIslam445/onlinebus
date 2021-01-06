@extends('layouts.backend.app')



@section('content')
<div class="container">

<h2>View Data</h2>

<table style="width:100%">
  
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Phone</th>
    <th >Voter NO</th>
    <th >Driver liecence No</th>
    
    <th class="text-center">Action</th>
  </tr>
     @foreach($drivers as $key=> $list)

     <tr>
     <td>{{$key +1}}</td>
     <td>{{$list->name}}</td>
     <td>{{$list->age}}</td>
     <td>{{$list->phone}}</td>
     <td>{{$list->vote_id_no}}</td>
     <td>{{$list->driver_licence_no}}</td>
     <td class="text-center">
     <a href="{{route('driveredit',$list->id)}}"class="btn btn-primary">Edit</a>
     <a href="{{route('driverdelete',$list->id)}}"class="btn btn-danger">Delete</a>
     <a href=""class="btn btn-warning">View</a>
     
     </td>
     
     </tr>

     @endforeach

  


</table>

</div>

@endsection