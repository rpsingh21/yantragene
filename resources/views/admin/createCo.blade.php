<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <br>
        <div class="col-md-offset-2 col-md-8">
            <form action="{{url('/admin/createCo')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-group">
                    <samp class="input-group-addon"><i class="fa fa-user"></i></samp>
                    <input type="text" class="form-control" name="name" placeholder="Co Name" required>
                </div><br>
                <div class="input-group">
                    <samp class="input-group-addon"><i class="fa fa-mail-forward"></i></samp>
                    <input type="email" class="form-control" name="email" placeholder="Email-ID" required>
                </div><br>
                <div class="input-group">
                    <samp class="input-group-addon"><i class="fa fa-github"></i></samp>
                    <select class="form-control" name="eventId" required>
                        @foreach($event as $item)
                            <option value="{{$item->eventId}}">{{$item->eventName}}</option>
                        @endforeach
                    </select>
                </div><br>
                <div class="input-group">
                    <samp class="input-group-addon"><i class="fa fa-phone"></i></samp>
                    <input type="text" class="form-control" name="phone" placeholder="Phone No" maxlength="10" minlength="10" required>
                </div><br>
                <button type="submit"  class="btn btn-success">submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
