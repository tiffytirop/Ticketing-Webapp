<html>
<head>
    <title>
    
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@foreach($bus as $bus)
<div class="container row">
    <div class="col-sm-3">
        <img class="img-thumbnail"src = "{{ asset('images/' .$bus->image) }}" width="250px" height="400px">
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
        <button type="button" class="btn btn-success">Book Seat</button>
        <a href="{{ url('busMaster', $bus->numberPlate) }}"><button type="button" class="btn btn-success">View Ride</button></a>
    </div>

</div>
@endforeach

</body>
</html>