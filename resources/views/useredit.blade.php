@include('frontend.layouts.partial.navbar')


<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration Form</title>
  </head>
  <body>
    <div class="row justify-content-center">

    <div class="col-sm-6">
    
    
    
@if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

<form method="post" action="{{route('userupdate',$users->id)}}">">
@csrf
<h2>Registration Form</h2>
  <div class="form-group">
    <label for="name">Your Name</label>
    <input type="text" class="form-control" value="{{$users->name}}" required id="name"name="name" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="email">Your Email</label>
    <input type="email" class="form-control"  value="{{$users->email}}"required id="email" name="email"placeholder="Enter Your Email">
  </div>
  <div class="form-group">
    <label for="contact">Your Contact</label>
    <input type="phone" class="form-control" value="{{$users->phone}}" required id="phone" name="phone"placeholder="Enter Your Contact Number">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" value="{{$users->address}}" required id="" cols="30" rows="3"class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="name">Role</label>
    <input type="text" class="form-control" value="{{$users->role}}" required id="role"name="role" placeholder="Enter Role">
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" value="{{$users->password}}" required id="password" name="password" placeholder="Enter Your Password">
  </div>

  <button class="btn btn-primary" type="submit">Update</button>
  <a class="btn btn-warning" href="{{route('loginform')}}" class="fadeIn fourth btn-signup">Log In</a>
  </form>

    
    </div>
    
    
    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  
</html>





