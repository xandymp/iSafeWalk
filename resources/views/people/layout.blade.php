<!DOCTYPE html>
<html>
<head>
    <title>iSafeWalk - Employees</title>
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
                <li class="active">
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
                <li>
                    <a href="{{ url('/gateway') }}">
                        <i class="fa fa-wifi"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="col-sm-3 title">
            <div class="row">
                <div class="col-10">
                    <h2>Employees&nbsp;<span style="font-size: 1.25rem;color: #cccccc">({{ count($people) }})</span></h2>
                </div>
                <div class="col">
                    <a href="#" id="create-person" class="btn btn-success"><i class="fa fa-plus" style="font-size: inherit"></i></a>
                </div>
            </div>
            <hr/>
            @foreach($people as $person)
                <div class="row list" data-id="{{ $person->id }}">
                    <div class="col d-none d-sm-block">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <div class="col-5 text-truncate" style="font-size: 8pt;">
                        <b>{{ $person->name }}</b><br>
                        <span style="color: #999999">{{ $person->job_title }}</span>
                    </div>
                    <div class="col text-truncate">
                        <span style="font-size: 8pt; float: left"><?= \App\People::STATUS_SELECT[$person->status]; ?></span>
                    </div>
                    <div class="col">
                        <a  href="#" class="btn btn-danger btn-sm delete" data-id="{{ $person->id }}">
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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
                    url: `{{ url('/people/') }}/${id}`,
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

        $(document).on('click', '#create-person', function () {
            $.ajax({
                url: `{{ url('/people/create') }}`,
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
                url: `{{ url('/people/') }}/${id}/edit`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.locationMap', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}/location-map`,
                success: function (data) {
                    $('#content').html(data);
                },
                error: function (error) {
                    alert('An error has occurred');
                    console.log(error);
                }
            });
        });

        $(document).on('click', '.interactions', function () {
            let id = $(this).data('id');

            $.ajax({
                url: `{{ url('/people/') }}/${id}/interactions`,
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
                url: `{{ url('/people/') }}/${id}`,
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
