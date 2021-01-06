<style> {box-sizing: border-box;}

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
}</style>











<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Registration Here</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cantata+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('/reg/')}}/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('/reg/')}}/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>

<div class="header">
  <a href="#default" class="logo">Online Bus Ticket Booking System</a>
  <div class="header-right">
    <a class="" href="{{route('frontpage')}}">Home</a>
    <a href="{{route('userform')}}">Sign In</a>
    @guest<a href="{{route('loginform')}}">Log In</a>@endguest
    @auth<a href="{{route('logout')}}">Log Out</a>@endauth
    <a href="{{route('frontpage')}}">Contact Us</a>
    <a href="{{route('frontpage')}}">FAQ</a>
    
  </div>
</div>



</body>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-cta">
          @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

<form method="post" action="{{route('userinsert')}}">
@csrf
						<h1>Sign Up Here</h1>
					</div>
					<div class="booking-form">
						<form>
							<div class="col-md-8">
								<div class="form-group">
									<span class="form-label">Your Name*</span>
									<input class="form-control" type="text" required id="name" name="name" placeholder="Enter Your Name">
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<span class="form-label">Your Email*</span>
									<input class="form-control" type="email" required id="email"  name="email"  placeholder="Enter Your Email">
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<span class="form-label">Your Contact*</span>
									<input class="form-control" type="phone" required id="phone" name="phone"  placeholder="Enter Your Contact">
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<span class="form-label">Address*</span>
                  
							  	<input class="form-control" type="text" required id="address" name="address" placeholder="Enter Your Address">
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<span class="form-label">Role*</span>
									<input class="form-control" type="role" required id="role" name="role" placeholder="Role">
								</div>
							</div>
              <div class="col-md-8">
								<div class="form-group">
									<span class="form-label">Password*</span>
									<input class="form-control" type="password" required id="password" name="password" placeholder="Password">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-btn">
									<button class="submit-btn">Register</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>