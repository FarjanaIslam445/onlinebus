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

*, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 16px;
}

.plane {
  margin: 20px auto;
  max-width: 300px;
}

.cockpit {
  height: 250px;
  position: relative;
  overflow: hidden;
  text-align: center;
  border-bottom: 5px solid #d8d8d8;
}
.cockpit:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 500px;
  width: 100%;
  border-radius: 50%;
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}
.cockpit h1 {
  width: 60%;
  margin: 100px auto 35px auto;
}

.exit {
  position: relative;
  height: 50px;
}
.exit:before, .exit:after {
  content: "EXIT";
  font-size: 14px;
  line-height: 18px;
  padding: 0px 2px;
  font-family: "Arial Narrow", Arial, sans-serif;
  display: block;
  position: absolute;
  background: green;
  color: white;
  top: 50%;
  transform: translate(0, -50%);
}
.exit:before {
  left: 0;
}
.exit:after {
  right: 0;
}

.fuselage {
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.seat {
  display: flex;
  flex: 0 0 14.2857142857%;
  padding: 5px;
  position: relative;
}
.seat:nth-child(2) {
  margin-right: 14.2857142857%;
}
.seat input[type=checkbox] {
  position: absolute;
  opacity: 0;
}
.seat input[type=checkbox]:checked + label {
  background: #bada55;
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat input[type=checkbox]:disabled + label {
  background: #dddddd;
  text-indent: -9999px;
  overflow: hidden;
}
.seat input[type=checkbox]:disabled + label:after {
  content: "X";
  text-indent: 0;
  position: absolute;
  top: 4px;
  left: 50%;
  transform: translate(-50%, 0%);
}
.seat input[type=checkbox]:disabled + label:hover {
  box-shadow: none;
  cursor: not-allowed;
}
.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.5rem;
  padding: 4px 0;
  background: #F42536;
  border-radius: 5px;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat label:before {
  content: "";
  position: absolute;
  width: 75%;
  height: 75%;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);
  background: rgba(255, 255, 255, 0.4);
  border-radius: 3px;
}
.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px #5C6AFF;
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: dodgerblue;
   color: white;
   text-align: center;
   }

   </style>


@section('content')
@if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif
<form method="post" action="{{route('seatstore')}}">
@csrf



<body>

<div class="header">
  <a href="#default" class="logo">Book Your Seat</a>
  <div class="header-right">
    <a class="" href="{{route('frontpage')}}">Home</a>
    <a href="{{route('userform')}}">Sign Up</a>
    @guest<a href="{{route('loginform')}}">Log In</a>@endguest
    @auth<a href="{{route('logout')}}">Log Out</a>@endauth
    <a href="#about">Contact Us</a>
    <a href="#about">FAQ</a>
  </div>
</div>
</div>
<div  style="display:flex; justify-content:flex-end;     margin-right: 51px;
    margin-top: 20;">
    <button class="btn btn-primary" type="submit">Book</button>
  
</div>
<input type="hidden" value="{{$id}}" name="trip_id">
<div class="plane">
  <div class="cockpit">
    <h1>Please select a Seat</h1>
  </div>
  <div class="exit exit--front fuselage">
    
  </div>
  <ol class="cabin fuselage">
    
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox"   value="A1" name="Seat_number[]" id="A1" />
          <label for="A1">A1</label>
        </li>
         
        <li class="seat">
          <input type="checkbox" value="A2" name="Seat_number[]" id="A2" />
          <label for="A2">A2</label>
        </li>
       
        <li class="seat">
          <input type="checkbox" value="A3" name="Seat_number[]" id="A3" />
          <label for="A3">A3</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="A4" name="Seat_number[]" id="A4" />
          <label for="A4">A4</label>
        </li>

      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" value="B1" name="Seat_number[]"id="B2" />
          <label for="B1">B1</label>
        </li>
        <li class="seat">
          <input type="checkbox"value="B2" name="Seat_number[]" id="B2" />
          <label for="2B">2B</label>
        </li>
     
        <li class="seat">
          <input type="checkbox"value="B3" name="Seat_number[]" id="B3" />
          <label for="B3">B3</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="B4" name="Seat_number[]" id="B4" />
          <label for="B4">B4</label>
        </li>
       
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" value="C1" name="Seat_number[]" id="C1" />
          <label for="C1">C1</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="C2" name="Seat_number[]" id="C2" />
          <label for="C2">C2</label>
        </li>
        <li class="seat">
          <input type="checkbox"  value="C3" name="Seat_number[]"id="C3" />
          <label for="C3">C3</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="C4" name="Seat_number[]" id="C4" />
          <label for="C4">C4</label>
        </li>


      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox"  value="D1" name="Seat_number[]"id="D1" />
          <label for="D1">D1</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="D2" name="Seat_number[]" id="D2" />
          <label for="D2">D2</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="D3" name="Seat_number[]" id="D3" />
          <label for="D3">D3</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="D4" name="Seat_number[]" id="D4" />
          <label for="D4">D4</label>
        </li>

        
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" value="E1" name="Seat_number[]" id="E1" />
          <label for="E1">E1</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="E2" name="Seat_number[]" id="E2" />
          <label for="E2">E2</label>
        </li>
        <li class="seat">
          <input type="checkbox"value="E3" name="Seat_number[]" id="E3" />
          <label for="E3">E3</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="E4" name="Seat_number[]" id="E4" />
          <label for="E4">E4</label>
        </li>


      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats"  type="A">
        <li class="seat">
          <input type="checkbox" value="F1" name="Seat_number[]" id="F1" />
          <label for="F1">F1</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="F2" name="Seat_number[]" id="F2" />
          <label for="F2">F2</label>
        </li>
        <li class="seat">
          <input type="checkbox"  value="F3" name="Seat_number[]" id="F3" />
          <label for="F3">F3</label>
        </li>
        <li class="seat">
          <input type="checkbox"  value="F4" name="Seat_number[]"id="F4" />
          <label for="F4">F4</label>
        </li>
        
       
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" value="G1" name="Seat_number[]" id="G1" />
          <label for="G1">G1</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="G2" name="Seat_number[]" id="G2" />
          <label for="G2">G2</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="G3" name="Seat_number[]" id="G3" />
          <label for="G3">G3</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="G4" name="Seat_number[]" id="G4" />
          <label for="G4">G4</label>
        </li>


      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" value="H1" name="Seat_number[]" id="H1" />
          <label for="H1">H1</label>
        </li>
        <li class="seat">
          <input type="checkbox"  value="H2" name="Seat_number[]"id="H2" />
          <label for="H@">H2</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="H3" name="Seat_number[]" id="H3" />
          <label for="H3">H3</label>
        </li>
        <li class="seat">
          <input type="checkbox"  value="H4" name="Seat_number[]"id="H4" />
          <label for="H4">H4</label>
        </li>


      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" value="I1" name="Seat_number[]" id="I1" />
          <label for="I1">I1</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="I2" name="Seat_number[]" id="I2" />
          <label for="I2">I2</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="I3" name="Seat_number[]" id="I3" />
          <label for="I3">I3</label>
        </li>
        <li class="seat">
          <input type="checkbox"value="I4" name="Seat_number[]" id="I4" />
          <label for="I4">I4</label>
        </li>


      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" value="J1" name="Seat_number[]" id="J1" />
          <label for="J1">J1</label>
        </li>
        <li class="seat">
          <input type="checkbox"value="J2" name="Seat_number[]" id="J2" />
          <label for="J2">J2</label>
        </li>
        <li class="seat">
          <input type="checkbox"value="J3" name="Seat_number[]" id="J3" />
          <label for="J3">J3</label>
        </li>
        <li class="seat">
          <input type="checkbox" value="J4" name="Seat_number[]" id="J4" />
          <label for="J4">J4</label>
        </li>

      </ol>
    </li>
  </ol>
  <div class="exit exit--back fuselage">
    
  </div>
  <body>



<div class="footer">
  <p></p>
</div>

</body>


</h2>

















