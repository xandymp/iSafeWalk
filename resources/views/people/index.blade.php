@extends('people.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 6 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('people.create') }}"> Create New Person</a>
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
            <th>E-mail</th>
            <th>Job Title</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($people as $person)
            <tr>
                <td>{{ $person->id }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->email }}</td>
                <td>{{ $person->job_title }}</td>
                <td>
                    <form action="{{ route('people.destroy', $person->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('people.show', $person->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('people.edit', $person->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $people->links() !!}

@endsection
