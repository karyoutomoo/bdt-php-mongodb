/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/8/2018
 * Time: 7:33 PM
 */
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Movie Index</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
    </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Studio</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($movies as $movie)
        <tr>
            <td>{{$movie->title}}</td>
            <td>{{$movie->genre}}</td>
            <td>{{$movie->year}}</td>
            <td>{{$movie->studio}}</td>
            <td><a href="{{action('MovieController@edit', $movie->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{action('MovieController@destroy', $movie->id)}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div align="right">
        <a href="/add" class="btn btn-primary" >Add new Movie</a>
    </div>
</div>
</body>
</html>