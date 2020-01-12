<html>
<head>
    <title>

    </title>
</head>
<body>
<div class="container">
   @foreach($bus as $bus)
   <div class="row">
            <div class="col-md-3">
                <img src="{{asset('images/'.$bus->image)}}" width="450px" height="450px">
            </div>
            < <ul>
            <li><h2>Number Plate:{{$bus->numberPlate}}</h2></li>
            <li<h3>Trip Name:</h3></l1>
            <li><h4>Seats Available:{{$bus->availableSeats}}</h4></li>
            <li><h5>Sacco:{{$bus->busSacco}}</h5></li>
            <li><h6>Trips Made{{$bus->numberOfTrips}}</h6></li>
        </ul>
              <a href="#"><button type="button" class="btn btn-outline-danger">Book Seat</button></a>
              
              
              
            </div>
        </div>
               
           {{-- <div class=" container" style="background-color: #e3f2fd; padding:20px; margin-top:25px; text-align:center;">
               <h1 style="text-transform: uppercase; text-decoration:underline; font-size:24px;"> Description</h1>
               <h4>Purchase price :  ksh</h4>
               <h4>Trip Details : </h4> --}}
           
       </div>

    @endforeach
    </div>
</body>

</html>