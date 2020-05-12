<!DOCTYPE html>
<html>
<head>
    <title>Devices</title>
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
                    <a href="#home">
                        <i class="fa fa-home" ></i>
                    </a>
                </li>
                <li>
                    <a href="people">
                        <i class="fa fa-users" ></i>
                    </a>
                </li>
                <li class="active">
                    <a href="device">
                        <i class="fa fa-tablet"></i>
                    </a>
                </li>
                <li>
                    <a href="sector">
                        <i class="fa fa-map-o"></i>
                    </a>
                </li>
                <li>
                    <a href="router">
                        <i class="fa fa-wifi"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-3 title">
            <h2>Devices&nbsp;<span style="font-size: 1.25rem;color: #cccccc">(4)</span></h2>
            <hr/>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-mobile"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Device 01</b><br>
                    <span style="color: #999999">0123456789</span>
                </div>
            </div>
            <div class="list active">
                <div class="col-sm-2">
                    <i class="fa fa-mobile"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Device 02</b><br>
                    <span style="color: #999999">9876543210</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-mobile"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Device 03</b><br>
                    <span style="color: #999999">4561237890</span>
                </div>
            </div>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-mobile"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Device 04</b><br>
                    <span style="color: #999999">7890123456</span>
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
