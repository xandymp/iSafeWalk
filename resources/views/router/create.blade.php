@extends('router.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('router.index') }}"> Back</a>
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

    <form action="{{ route('router.store') }}" method="POST">
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
                    <strong>Serial:</strong>
                    <input
                        type="text"
                        name="serial"
                        class="form-control"
                        placeholder="Serial"
                        required>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Horizontal Position:</strong>
                    <input
                        type="number"
                        name="horizontal"
                        class="form-control"
                        placeholder="Horizontal Position"
                        required>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Vertical Position:</strong>
                    <input
                        type="number"
                        name="vertical"
                        class="form-control"
                        placeholder="Vertical Position"
                        required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sector:</strong>
                    <select
                        class="form-control"
                        name="sector_id"
                        id="sector_id">
                        <option value {{ old('sector_id', null) === null ? 'selected' : '' }}>Please select</option>
                        @foreach($sectors as $key => $label)
                            <option value="{{ $key }}" {{ old('sector_id', null) === (string) $key ? 'selected' : '' }}>
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
