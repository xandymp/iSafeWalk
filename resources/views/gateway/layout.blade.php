<!DOCTYPE html>
<html>
<head>
    <title>iSafeWalk - Gateways</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ 'css/stylesheet.css' }}" rel="stylesheet">
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
                    <a href="{{ url('/beacon') }}">
                        <i class="fa fa-tablet"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/zone') }}">
                        <i class="fa fa-map-o"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/sector') }}">
                        <i class="fa fa-puzzle-piece"></i>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('/gateway') }}">
                        <i class="fa fa-wifi"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-3 i-list">
            <div class="row">
                <div class="col-10">
                    <h2>Gateways&nbsp;<span style="font-size: 1.25rem;color: #cccccc">({{ count($gateways) }})</span></h2>
                </div>
                <div class="col">
                    <a href="#" id="create-gateway" class="btn btn-success"><i class="fa fa-plus" style="font-size: inherit"></i></a>
                </div>
            </div>
            <hr/>
            @foreach($gateways as $gateway)
                <div class="row list" data-id="{{ $gateway->id }}">
                    <div class="col-sm-2 d-none d-sm-block">
                        <i class="fa fa-feed"></i>
                    </div>
                    <div class="col-sm-5 text-truncate" style="font-size: 8pt">
                        <b>{{ $gateway->name }}</b><br>
                        <span style="color: #999999"></span>
                    </div>
                    <div class="col text-truncate"></div>
                    <div class="col">
                        <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $gateway->id }}">
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
    <script src="{{ 'js/common.js'}}"></script>

    <script type="text/javascript" async>
        $(document).on('click', '.list', function () {
            $('.list').removeClass('active');
            $(this).addClass('active');

            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/gateway/') }}/${id}`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#content').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.delete', function (e) {
            e.stopPropagation();
            if (confirm("Do you really want to delete this record?")) {
                let id = $(this).data('id');

                $.ajax({
                    url: `{{ url('/gateway/') }}/${id}`,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        openLoad();
                    },
                    success: function () {
                        closeLoad();
                        window.location.reload();
                    },
                    error: function (error) {
                        closeLoad();
                        alert('An error has occurred');
                        console.log(error);
                    }
                });
            }
        });

        $(document).on('click', '#create-gateway', function () {
            $.ajax({
                url: `{{ url('/gateway/create') }}`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#content').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.edit', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/gateway/') }}/${id}/edit`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#content').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.back', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/gateway/') }}/${id}`,
                beforeSend: function() {
                    openLoad();
                },
                success: function (data) {
                    closeLoad();
                    $('#content').html(data);
                },
                error: function (error) {
                    closeLoad();
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });
    </script>
</body>
</html>
