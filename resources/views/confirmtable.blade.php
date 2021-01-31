



<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Available Trips</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="header">
  <a href="{{route('dashboard')}}" style="text-decoration: none" class="logo">Online Bus Ticket Booking System</a>
  <div class="header-right">
     <a class="" href="{{route('frontpage')}}" style="text-decoration: none">Home</a>
    @guest<a href="{{route('userform')}}" style="text-decoration: none">Sign In</a>@endguest
    @guest<a href="{{route('loginform')}}" style="text-decoration: none">Log In</a>@endguest
    @auth<a href="{{route('logouts')}}" style="text-decoration: none">Admin</a>@endauth
    
  </div>
</div>



</body>
<body>
{{--<div  style="display:flex; justify-content:flex-end;     margin-right: 51px;
    margin-top: 20;">
<a href="{{route('confirmtable')}}" class="btn btn-success">Go Deteails</a>
</div>--}}
<div class="container">

  <h1>Booking Table</h1>
             
  <table class="table table-dark">
    <thead>
      <tr>
    <th>SL</th>
    <th>User ID</th>
    <th>Price</th>
    <th>Journey Date</th>
    <th>Trip ID</th>
    <th class="text-center">Action</th>
      </tr>
          @foreach ($bookings as $key=>$booking )

    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$booking->user_id}}</td>
        <td>{{$booking->price}}</td>
        <td>{{$booking->journey_date}}</td>
        <td>{{$booking->trip_id}}</td>
        <td class="text-center">
        <a href="{{route('confirmtable',$booking->id)}}" class="btn btn-success">Go Deteails</a>
    </tr>
        
    @endforeach

    </thead>
   
  </table>
</div>

</body>
</html>


















































