<div id="interactions">
    @if (!is_null($interactions))
        @foreach($interactions as $interaction)
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 primary-interaction card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                <i class="fa fa-user-circle-o"></i>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <strong>Name:</strong>
                                {{ $interaction['person_name'] ?? null }}
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <strong>Beacon:</strong>
                                {{ $interaction['beacon_name'] }}
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <strong>Interaction:</strong>
                                {{ date('H:i:s', $interaction['duration']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

@if(!empty($warning))
    <script type="text/javascript" async>
        alert('{{ $warning }}');
    </script>
@endif
