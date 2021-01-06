@extends('layouts.backend.app')
@section('content')
<table style="width:100%">

  <tr>
    <th>SL</th>
    <th>Reporter Name</th>
    <th>Report Details</th>

    
    
    
    
    <th class="text-center">Action</th>
  </tr>
  @foreach($reports as $key=> $reportlist)
  <tr>
     <td>{{$key +1}}</td>
     <td>{{$reportlist->name}}</td>
     <td>{{$reportlist->details}}</td>
     
     
     
     
     
     <td class="text-center">
     <a href=""class="btn btn-primary">Edit</a>
     <a href=""class="btn btn-danger">Delete</a>
     <a href=""class="btn btn-warning">View</a>
     
     </td>
     
     </tr>

  @endforeach


</table>
@endsection