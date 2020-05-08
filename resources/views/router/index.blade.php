@extends('router.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('router.create') }}"> Create New Router</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Sector</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($routers as $router)
            <tr>
                <td>{{ $router->id }}</td>
                <td>{{ $router->name }}</td>
                <td>{{ $router->sector->name }}</td>
                <td>
                    <form action="{{ route('router.destroy', $router->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('router.show', $router->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('router.edit', $router->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $routers->links() !!}

@endsection