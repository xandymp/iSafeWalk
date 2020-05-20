<!DOCTYPE html>
<html>
<head>
    <title>iSafeWalk - Devices</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
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
                <li class="active">
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
            <div class="row">
                <div class="col-10">
                    <h2>Devices&nbsp;<span style="font-size: 1.25rem;color: #cccccc">({{ count($devices) }})</span></h2>
                </div>
                <div class="col">
                    <a href="#" id="create-device" class="btn btn-success pull-right"><i class="fa fa-plus" style="font-size: inherit"></i></a>
                </div>
            </div>
            <hr/>
            @foreach($devices as $device)
                <div class="row list" data-id="{{ $device->id }}">
                    <div class="col-sm-2 d-none d-sm-block">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <div class="col-sm-5 text-truncate" style="font-size: 8pt">
                        <b>{{ $device->name }}</b><br>
                        <span style="color: #999999">{{ $device->serial }}</span>
                    </div>
                    <div class="col text-truncate"></div>
                    <div class="col">
                        <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $device->id }}">
                            <i class="fa fa-trash" style="font-size: inherit"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="content" class="col-sm-8 container-fluid bg-light">
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
                url: `{{ url('/device/') }}/${id}`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.delete', function (e) {
            e.stopPropagation();
            if (confirm("Deseja realmente excluir este registro?")) {
                let id = $(this).data('id');

                $.ajax({
                    url: `{{ url('/device/') }}/${id}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function () {
                        window.location.reload();
                    },
                    error: function (error) {
                        alert('An error has occurred');
                        console.log(error);
                    }
                });
            }
        });

        $(document).on('click', '#create-device', function () {
            $.ajax({
                url: `{{ url('/device/create') }}`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.edit', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/device/') }}/${id}/edit`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.back', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/device/') }}/${id}`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });
    </script>
    </body>
</html>
