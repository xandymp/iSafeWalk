@extends('device.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Devices CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('device.create') }}"> Create New Device</a>
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
            <th>Serial Nº</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($devices as $device)
            <tr>
                <td>{{ $device->id }}</td>
                <td>{{ $device->name }}</td>
                <td>{{ $device->serial }}</td>
                <td>
                    <form action="{{ route('device.destroy', $device->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('device.show', $device->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('device.edit', $device->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $devices->links() !!}

@endsection