<!DOCTYPE html>
<html>
<head>
    <title>iSafeWalk - Employees</title>
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
                <li class="active">
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
                <li>
                    <a href="{{ url('/router') }}">
                        <i class="fa fa-wifi"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-3 title">
            <h2>Employees&nbsp;<span style="font-size: 1.25rem;color: #cccccc">({{ count($people) }})</span></h2>
            <hr/>
            @foreach($people as $person)
                <div class="list" data-id="{{ $person->id }}">
                    <div class="col-sm-2">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <div class="col-sm-5" style="font-size: 8pt">
                        <b>{{ $person->name }}</b><br>
                        <span style="color: #999999">{{ $person->job_title }}</span>
                    </div>
                    <div class="col-sm-4">
                        <span style="font-size: 8pt; float: left"><?= \App\People::STATUS_SELECT[$person->status]; ?></span>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="content" class="col-sm-9 container-fluid bg-light">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" async>
        $(document).on('click', '.list', function () {
            $('.list').removeClass('active');
            $(this).addClass('active');

            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert(error);
                }
            });
        });

        $(document).on('click', '.edit', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}/edit`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert(error);
                }
            });
        });

        $(document).on('click', '.back', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert(error);
                }
            });
        });
    </script>
</body>
</html>
