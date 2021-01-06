@extends('layouts.backend.app')
@section('content')
<table style="width:100%">
  
  <tr>
  <th>SL</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    
    <th>Role</th>

    
    <th class="text-center">Action</th>
  </tr>
  @foreach($users as $key=> $userview)
  <tr>
     <td>{{$key +1}}</td>
     <td>{{$userview->name}}</td>
     <td>{{$userview->email}}</td>
     <td>{{$userview->phone}}</td>
     <td>{{$userview->role}}</td>
     
     
     
     <td class="text-center">
     
     <a href="{{route('userdelete',$userview->id)}}"class="btn btn-danger">Delete</a>
     
     
     </td>
     
     </tr>

  @endforeach



  


</table>
@endsection