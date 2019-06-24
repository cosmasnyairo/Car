<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Car Id</th>
                <th scope="col">Review</th>
                <th scope="col">Time reviewed</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{$review->id}}</td>
                    <td>{{$review->review}}</td>
                    <td>{{$review->created_at}}</td>
                    <td><a href="{{route('getcar',$review->id)}}">Add a review </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
