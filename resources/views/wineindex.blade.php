<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Wine Review Index</title>
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
            <th>Description</th>
            <th>Points</th>
            <th>Taster Name</th>
            <th>Taster Twitter</th>
            <th>Price</th>
            <th>Designation</th>
            <th>Variety</th>
            <th>Region 1</th>
            <th>Region 2</th>
            <th>Province</th>
            <th>Country</th>
            <th>Winery</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($wines as $wine)
        <tr>
            <td>{{$wine->title}}</td>
            <td>{{$wine->description}}</td>
            <td>{{$wine->points}}</td>
            <td>{{$wine->taster_name}}</td>
            <td>{{$wine->taster_twitter_handle}}</td>
            <td>{{$wine->price}}</td>
            <td>{{$wine->designation}}</td>
            <td>{{$wine->variety}}</td>
            <td>{{$wine->region_1}}</td>
            <td>{{$wine->region_2}}</td>
            <td>{{$wine->province}}</td>
            <td>{{$wine->country}}</td>
            <td>{{$wine->winery}}</td>
            <td><a href="{{action('WineController@edit', $wine->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{action('WineController@destroy', $wine->id)}}" method="post">
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
        <a href="/add" class="btn btn-primary" >Add new Review</a>
    </div>
</div>
</body>
</html>