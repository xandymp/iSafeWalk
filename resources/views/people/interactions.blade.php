<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Interactions</h1>
        </div>
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back" data-id="{{ $person->id }}"><i class="fa fa-undo"></i></span>
        </div>
    </div>
</div>
<hr />

@if (!is_null($interactions))
    @foreach($interactions as $interaction)
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 primary-interaction" style="border-style: outset;">
                <div class="row" >
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $interaction['person_name'] ?? null }}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <strong>Beacon:</strong>
                        {{ $interaction['beacon_name'] }}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <strong>Interaction:</strong>
                        {{ date('H:i:s', $interaction['duration']) }}
                    </div>
                </div>
            </div>
            @if(!empty($interaction['secondary_interactions']))
                <div class="col-xs-4 col-sm-4 col-md-4 secondary-interaction">
                    @foreach($interaction['secondary_interactions'] as $interaction)
                        <div class="col-xs-12 col-sm-12 col-md-12" style="border-style: outset;">
                            <div class="row">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $interaction['person_name'] ?? null }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <strong>Beacon:</strong>
                                    {{ $interaction['beacon_name'] }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <strong>Interaction:</strong>
                                    {{ date('H:i:s', $interaction['duration']) }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
        <hr />
    @endforeach
@endif
