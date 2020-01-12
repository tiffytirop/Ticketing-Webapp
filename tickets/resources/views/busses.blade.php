<html>
<head>
    <title>
    
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container row">
    <div class="col-sm-3">
        <a href="{{ url('prodMaster', $bott->id) }}"><img class="img-thumbnail"src = "{{ asset('images/' .$bus->image) }}" width="250px" height="400px"></a>
    </div>
    <div class="col-sm-9">
    <h1><b>Ride Details</b></h1>
        <ul>
            <li><h2>Number Plate:{{$bus->numberPlate}}</h2></li>
            <li<h3>Trip Name:</h3></l1>
            <li><h4>Seats Available:{{$bus->availableSeats}}</h4></li>
            <li><h5>Sacco:{{$bus->busSacco}}</h5></li>
            <li><h6>Trips Made{{$bus->numberOfTrips}}</h6></li>
        </ul>
        <button type="button" class="btn btn-default">Book Seat</button>
        <button type="button" class="btn btn-default">View Ride</button>
    </div>

</div>

</body>
</html>