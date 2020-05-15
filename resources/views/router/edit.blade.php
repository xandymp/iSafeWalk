<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary back" data-id="{{ $router->id }}"> Back</span>
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

<form action="{{ route('router.update',$router->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input
                    type="text"
                    name="name"
                    value="{{ $router->name }}"
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
                    value="{{ $router->serial }}"
                    class="form-control"
                    placeholder="Serial"
                    required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
