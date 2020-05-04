@extends('people.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Person</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('people.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('people.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Name"
                        required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>E-mail:</strong>
                    <input
                        type="text"
                        name="email"
                        class="form-control"
                        placeholder="E-mail"
                        required>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select
                        class="form-control"
                        name="status"
                        id="status"
                        required>
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>Please select</option>
                        @foreach(App\People::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', '0') === (string) $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Birth Date:</strong>
                    <input
                        id="birth_date"
                        type="date"
                        name="birth_date"
                        class="form-control"
                        placeholder="Birth Date">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Job Title:</strong>
                    <input
                        type="text"
                        name="job_title"
                        class="form-control"
                        placeholder="Job Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Device:</strong>
                    <select
                        class="form-control"
                        name="device_id"
                        id="device_id">
                        <option value {{ old('device_id', null) === null ? 'selected' : '' }}>Please select</option>
                        @foreach($devices as $key => $label)
                            <option value="{{ $key }}" {{ old('device_id', null) === (string) $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
