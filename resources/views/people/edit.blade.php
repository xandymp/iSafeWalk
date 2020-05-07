@extends('people.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
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

    <form action="{{ route('people.update',$person->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input
                        type="text"
                        name="name"
                        value="{{ $person->name }}"
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
                        value="{{ $person->email }}"
                        class="form-control"
                        placeholder="E-mail"
                        required>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label class="required">Status</label>
                    <select
                        class="form-control"
                        name="status"
                        id="status"
                        required>
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>Please select</option>
                        @foreach(App\People::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', $person->status) === (string) $key ? 'selected' : '' }}>
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
                        value="{{ date('m/d/Y', strtotime($person->birth_date)) }}"
                        class="form-control"
                        placeholder="Birth Date"
                        required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Job Title:</strong>
                    <input
                        type="text"
                        name="job_title"
                        value="{{ $person->job_title }}"
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
                            <option value="{{ $key }}" {{ old('device_id', $person->device_id) === (string) $key ? 'selected' : '' }}>
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
