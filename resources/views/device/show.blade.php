<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary edit" data-id="{{ $device->id }}"> Edit</span>
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

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sector:</strong>
            {{ $deviceLocation['sector_id'] }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Horizontal:</strong>
            {{ round($deviceLocation['horizontal'], 2) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Vertical:</strong>
            {{ round($deviceLocation['vertical'], 2) }}
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
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    {{ date('d/m/Y - H:i:s', strtotime($previousLocation['time']))}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duration:</strong>
                    {{ $previousLocation['duration']}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sector:</strong>
                    {{ $previousLocation['sector_id'] }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horizontal:</strong>
                    {{ round($previousLocation['horizontal'], 2) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vertical:</strong>
                    {{ round($previousLocation['vertical'], 2) }}
                </div>
            </div>
        </div>
        <hr/>
    @endforeach
@endif
