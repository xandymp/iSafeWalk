<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Interactions</h1>
        </div>
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back-filter" data-id="{{ $person->id }}"><i class="fa fa-undo"></i> Back</span>
        </div>
    </div>
</div>
<hr />
<div class="row interactions">
    <div class="col-lg-12 ml-lg-3">
        <div class="row">
@if (!is_null($interactions))
        <div class="col-xs-3 col-sm-3 col-md-3 card">
            <div class="card-body">
                <div class="row" >
                    <div class="form-group">
                        <strong>Name:</strong>
                        First level user
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <strong>Beacon:</strong>
                        First level user
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <strong>Interaction:</strong>
                        First level user
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 mb-lg-3">
    @foreach($interactions as $interaction)
        <div class="row mb-lg-3">
            <div class="col-xs-5 col-sm-5 col-md-5 secondary-interaction card level2">
                <div class="card-body">
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
            </div>
            @if(!empty($interaction['secondary_interactions']))
                <div class="col-xs-5 col-sm-5 col-md-5 secondary-interaction">
                    @foreach($interaction['secondary_interactions'] as $interaction)
                        <div class="card col-xs-12 col-sm-12 col-md-12 mb-lg-3 level2" style="border-style: outset;">
                            <div class="card-body">
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
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
        </div>
@endif
        </div>
    </div>
</div>
