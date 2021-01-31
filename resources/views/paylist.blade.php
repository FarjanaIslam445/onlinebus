@extends('layouts.backend.app')
@section('content')
<table style="width:100%">

  <tr>
  <th>SL</th>
    <th>Booking ID</th>
    <th>Send From</th>
    <th>Transection ID</th>
    <th>Payment Method</th>
    <th>Ammount</th>
    
    
    {{--<th class="text-center">Action</th>--}}
  </tr>
  @foreach($payments as $key=> $pay)
  <tr>
     <td>{{$key +1}}</td>
     <td>{{$pay->booking_id}}</td>
     <td>{{$pay->send_from}}</td>
     <td>{{$pay->transection_number}}</td>
     <td>{{$pay->payment_method}}</td>
     <td>{{$pay->ammount}}</td>
     
     
     
     <td class="text-center">
     
     
     </td>
     
     </tr>

  @endforeach


</table>
@endsection