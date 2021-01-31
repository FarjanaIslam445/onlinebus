<style>* {box-sizing: border-box;}

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
	<title>Payments </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('/logins/')}}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/logins/')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body>

<div class="header">
  <a href="{{route('frontpage')}}" class="logo">Online Bus Ticket Booking System</a>
  <div class="header-right">
    <a class="" href="{{route('frontpage')}}"style="text-decoration: none">Home</a>
    @guest<a href="{{route('userform')}}"style="text-decoration: none">Sign In</a>@endguest
    @guest<a href="{{route('loginform')}}"style="text-decoration: none">Log In</a>@endguest
    @auth<a href="{{route('logout')}}"style="text-decoration: none">Log Out</a>@endauth
    <a href="{{route('frontpage')}}"style="text-decoration: none">Contact Us</a>
    
  </div>
</div>


</body>





<body>
	<p>Emergency:01714518001</p> 
	<p> Bkash Number:01639768477</p>        
	<div class="limiter">
	         
		<div class="container-login100">
		    
			
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form"method="POST"action="{{route('paystore',$booking->id)}}">
				  {{-- {{dd($booking)}} --}}
				  
             @if(session()->has('msg'))
              <p class="alert alert-success">{{session()->get('msg')}}</p>
             @endif

            @if($errors->any())
           @foreach($errors->all() as $er)
             <p class="alert alert-danger">{{$er}}</p>
           @endforeach
                   @endif
				@csrf
					<span class="login100-form-title p-b-33">
						Pay Your Cash
					</span>

				<div class="wrap-input100 validate-input" data-validate = "number">
				<input class="input100" type="text" id="send_from" name="send_from" placeholder="Send From">
				<span class="focus-input100-1"></span>
				<span class="focus-input100-2"></span>
					</div>
					

					<div class="wrap-input100 rs1 validate-input" data-validate="transection_number">
						<input class="input100" type="string" id="transection_number" name="transection_number" placeholder="Transection Number">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Text">
				<input class="input100" type="text" id="payment_method" name="payment_method" placeholder="Payment Method ">
				
				<span class="focus-input100-1"></span>
				<span class="focus-input100-2"></span>
					</div>
				<div class="wrap-input100 validate-input" data-validate = "number">
				<input class="input100" type="number" id="ammount" name="ammount" placeholder="Ammount">
				<span class="focus-input100-1"></span>
				<span class="focus-input100-2"></span>
					</div>
					

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Send
						</button>
					</div>



						
					
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="{{asset('/logins/')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/logins/')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/logins/')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('/logins/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/logins/')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/logins/')}}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{asset('/logins/')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/logins/')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/logins/')}}/js/main.js"></script>

</body>
</html>