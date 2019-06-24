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
</head>
<body>
<a href="{{url('/')}}">Go back</a>
<div class="container">
    <div class="row">
    <form action="{{route('review.store')}}" method="get">
    <div>
        <div>

            <label for="review">Review for {{$car->model}}</label>
            <input value="{{$car->id}}" type="hidden" name="carid">
            <input type="text" class="form-control" id="review" name="review" placeholder="Add review" value="{{old('review')}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </div>
    </form>
    </div>
    <div class="row" style="margin-top: 50px;">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Reviews made so far</th>
            </tr>
            </thead>
            <tbody>
            @forelse($reviews as $review)
                <tr>
                    <td>{{$review->review}}</td>
                </tr>
            @empty
                <tr>
                    <td>No reviews yet</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
