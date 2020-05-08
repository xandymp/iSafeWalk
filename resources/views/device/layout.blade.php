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
            <h2>Devices&nbsp;<span style="font-size: 1.25rem;color: #cccccc">(243)</span></h2>
            <br/>
            <hr/>
            <div class="list">
                <div class="col-sm-2">
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Shadrias Pearson</b><br>
                    <span style="color: #999999">Warehouse Team Member</span>
                </div>
                <div class="col-sm-4">
                    <span style="font-size: 9pt; float: left">Person Status</span>
                </div>
            </div>
            <hr/>
            <div class="list active">
                <div class="col-sm-2">
                    <i class="fa fa-user-circle"></i>
                </div>
                <div class="col-sm-5" style="font-size: 8pt">
                    <b>Beatriz Brito</b><br>
                    <span style="color: #999999">Logistics Manager</span>
                </div>
                <div class="col-sm-4">
                    <span style="font-size: 9pt; float: left">Person Status</span>
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
