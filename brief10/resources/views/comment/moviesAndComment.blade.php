<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>les films</title>
    <style>

html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}


    .title{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="title">
        <h2>liste des films</h2>
    </div>
    <br>
    <br> 

    <div class="col-sm-4 ">
        @foreach ($movie as $movies)      

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./htdocs/{{ $movies->photo }}" alt="Card image">
            <div class="card-body">
              <h5 class="card-title">{{ $movies->title }}</h5>
              <p class="card-text">{{ $movies->author }}</p>
              {{-- <a href="{{ url('movie/'.$movie->id.'/edit') }}" class="btn btn-primary">Edit</a> --}}
              <a href="{{ url('showMovies/'.$movies->id.'/movie') }}" class="btn btn-primary">Show</a>
            </div>
          </div>
        @endforeach

    </div>
</div>





    
</body>
</html>