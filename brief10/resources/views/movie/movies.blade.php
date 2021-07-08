<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>liste des films</title>
    <style>

    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
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
    <div class="container">
        <div class="row col-md-12 ">
        <table class="table table-striped custab">
        <thead>
            <a href="{{ url('movie/create') }}" class="btn btn-primary  pull-right"><b>+</b> Add new categories</a>
            <tr>
                <th>ID</th>
                <th>auteurs</th>
                <th>titre</th>
                <th>photo</th>
                <th>description</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>

        @foreach ($movie as $movie)
        <tr>
            <td> {{ $movie->id }}</td>
            <td> {{ $movie->author }}</td>
            <td> {{ $movie->title }}</td>
            <td> {{ $movie->photo }}</td>
            <td> {{ $movie->description }}</td>
            <td>
                <a href="{{ yrl('movie/'.$cv->id.'/edit') }}" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
            
        @endforeach

        </table>
        </div>
    </div>
</body>
</html>