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
  <a href="#default" style="text-decoration: none" class="logo">Online Bus Ticket Booking System</a>
  <div class="header-right">
    <a class="" href="{{route('frontpage')}}" style="text-decoration: none">Home</a>
    @guest<a href="{{route('userform')}}" style="text-decoration: none">Sign In</a>@endguest
    @guest<a href="{{route('loginform')}}" style="text-decoration: none">Log In</a>@endguest
    @auth<a href="{{route('logout')}}"style="text-decoration: none">Log Out</a>@endauth
    <a href="{{route('frontpage')}}"style="text-decoration: none">Contact Us</a>

  </div>
</div>



</body>
<body>

<div class="container">
  <h1>Available Trips on {{$lookingDate}}</h1>
             
  <table class="table table-dark">
    <thead>
      <tr>
        <th>SL</th>
        <th>Date</th>
        <th>Reporting</th>
        <th>Departure</th>
        <th>From</th>
        <th>To</th>
        <th>Coach Type</th>
        <th>Price</th>
        
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
     
     <td><a href="{{route('seat',[$triplist->id,$lookingDate])}}"class="btn btn-warning">View Seats</a></td>

     @endforeach
    </thead>
   
  </table>
</div>

</body>
</html>
