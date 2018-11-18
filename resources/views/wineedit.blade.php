<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit a Review</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Edit A Review</h2><br/>
    <div class="container">
    </div>
    <form method="post" action="{{action('WineController@update', $id)}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{$wine->title}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Description">Description:</label>
                <input type="text" class="form-control" name="description" value="{{$wine->description}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Points">Points:</label>
                <input type="text" class="form-control" name="points" value="{{$wine->points}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Taster Name">Taster Name:</label>
                <input type="number" class="form-control" name="taster_name" value="{{$wine->taster_name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Taster Name">Taster Twitter:</label>
                <input type="text" class="form-control" name="taster_twitter_handle" value="{{$wine->taster_twitter_handle}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Price">Price:</label>
                <input type="text" class="form-control" name="price" value="{{$wine->price}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Designation">Designation:</label>
                <input type="text" class="form-control" name="designation" value="{{$wine->designation}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Variety">Variety:</label>
                <input type="text" class="form-control" name="variety" value="{{$wine->variety}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Region 1">Region 1:</label>
                <input type="text" class="form-control" name="region_1" value="{{$wine->region_1}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Region 2">Region 2:</label>
                <input type="text" class="form-control" name="region_2" value="{{$wine->region_2}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Province">Province:</label>
                <input type="text" class="form-control" name="province" value="{{$wine->province}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Country">Country:</label>
                <input type="text" class="form-control" name="country" value="{{$wine->country}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Winery">Winery:</label>
                <input type="text" class="form-control" name="winery" value="{{$wine->winery}}">
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
        <a href="/wines" class="btn btn-danger" >Back to Reviewlist</a>
    </div>
</div>
</body>
</html>