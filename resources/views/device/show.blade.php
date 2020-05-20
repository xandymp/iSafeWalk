<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm edit" data-id="{{ $device->id }}"><i class="fa fa-pencil"></i></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $device->name }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Serial Nº:</strong>
            {{ $device->serial }}
        </div>
    </div>
</div>

@if (!empty($previousLocations))
    <hr/>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h4>Previous locations</h4>
            <hr/>
        </div>
    </div>
    @foreach($previousLocations as $previousLocation)
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Date:</strong>
                    {{ date('d/m/Y - H:i:s', strtotime($previousLocation->location_time)) }}
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Duration:</strong>
                    {{ $previousLocation->duration }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sector:</strong>
                    {{ $previousLocation->sector_name }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1">
                <div class="form-group">
                    <strong>X:</strong>
                    {{ round($previousLocation->location_x, 2) }}
                </div>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1">
                <div class="form-group">
                    <strong>Y:</strong>
                    {{ round($previousLocation->location_y, 2) }}
                </div>
            </div>
        </div>
        <hr/>
    @endforeach
@endif
