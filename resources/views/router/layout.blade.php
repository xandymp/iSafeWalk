<!DOCTYPE html>
<html>
<head>
    <title>iSafeWalk - Routers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ URL::to('/') }}/css/stylesheet.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li>
                    <a href="/">
                        <i class="fa fa-home" ></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/people') }}">
                        <i class="fa fa-users" ></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/device') }}">
                        <i class="fa fa-tablet"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/sector') }}">
                        <i class="fa fa-map-o"></i>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('/router') }}">
                        <i class="fa fa-wifi"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-3 title">
            <h2>Routers&nbsp;<span style="font-size: 1.25rem;color: #cccccc">(14)</span></h2>
            <hr/>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 01</b><br>
                    <span style="color: #999999">Sector 01</span>
                </div>
            </div>
            <div class="list active">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 02</b><br>
                    <span style="color: #999999">Sector 01</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 03</b><br>
                    <span style="color: #999999">Sector 01</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 04</b><br>
                    <span style="color: #999999">Sector 01</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 05</b><br>
                    <span style="color: #999999">Sector 01</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 06</b><br>
                    <span style="color: #999999">Sector 01</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 07</b><br>
                    <span style="color: #999999">Sector 02</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 08</b><br>
                    <span style="color: #999999">Sector 02</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 09</b><br>
                    <span style="color: #999999">Sector 02</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 09</b><br>
                    <span style="color: #999999">Sector 02</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 09</b><br>
                    <span style="color: #999999">Sector 02</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 09</b><br>
                    <span style="color: #999999">Sector 02</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-feed"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Router 09</b><br>
                    <span style="color: #999999">Sector 02</span>
                </div>
            </div>
        </div>
        <div class="col-sm-9 container-fluid bg-light">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
