<!DOCTYPE html>
<html>
<head>
<title>
        All cars
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>  <br>
    <br>
<div class="container">
<div class="row">
    <form action="/cars" method="post" enctype="multipart/form-data" class="form-inline">
        @if(count($errors))
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        @endif
        {{ csrf_field() }}

      
        <div class="form-group mb-2">
                <label for="make">Make &nbsp</label>
                <input type="text" class="form-control" id="make" name="make" value="{{old('make')}}" placeholder="Enter make">
        </div>
        <div class="form-group mx-sm-3 mb-2">
                <label for="model">Model &nbsp </label> 
                <input type="text" class="form-control" id="model" name="model" value="{{old('model')}}" placeholder="Enter Model">
        </div>
        <div class="form-group mx-sm-3 mb-2">
                <label for="date">Date Manufactured &nbsp</label>
                <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}" placeholder="Enter date"> &nbsp &nbsp
            <button type="submit" class="btn btn-primary"> &nbsp Submit</button>
        </div>
    </form>

</div>
    <hr>
<div class="row">
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Car Id</th>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->make}}</td>
                <td>{{$car->model}}</td>
                <td><a href="{{route('getreview',$car->id)}}">Add a review </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

    <div class="row">
        
        <button type="submit" class="btn btn-primary">Go to Reviews</button>
        </a>
    </div>



    </div>
</div>

</body>
</html>
