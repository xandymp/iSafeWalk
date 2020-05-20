<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm edit" data-id="{{ $person->id }}"><i class="fa fa-pencil"></i></span>
        </div>
        @if (!is_null($person->device))
            <div class="pull-right" style="padding: inherit">
                <span class="btn btn-primary btn-sm locationMap" data-id="{{ $person->id }}"> <i class="fa fa-street-view"></i></span>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $person->name }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>E-mail:</strong>
            {{ $person->email }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {{ $status }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Birth Date:</strong>
            {{ date('d/m/Y', strtotime($person->birth_date)) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Job Title:</strong>
            {{ $person->job_title }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Device:</strong>
            {{ $person->device->name ?? null }}
        </div>
    </div>
</div>

@if(!empty($warning))
    <script type="text/javascript" async>
        alert('{{ $warning }}');
    </script>
@endif
