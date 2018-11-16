/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/8/2018
 * Time: 10:32 PM
 */
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit a Movie</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Edit A Movie</h2><br/>
    <div class="container">
    </div>
    <form method="post" action="{{action('MovieController@update', $id)}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{$movie->title}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Genre">Genre:</label>
                <input type="text" class="form-control" name="genre" value="{{$movie->genre}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Year">Year:</label>
                <input type="number" class="form-control" name="year" value="{{$movie->year}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Studio">Studio:</label>
                <input type="text" class="form-control" name="studio" value="{{$movie->studio}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
    <div align="left">
        <a href="/movies" class="btn btn-danger" >Back to Movielist</a>
    </div>
</div>
</body>
</html>