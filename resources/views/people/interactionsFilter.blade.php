<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Interactions Filter</h1>
        </div>
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back" data-id="{{ $person->id }}"><i class="fa fa-undo"></i></span>
        </div>
    </div>
</div>
<hr />

<input type="hidden" id="person-id" value="{{ $person->id }}">

<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 text-center">
        <div class="form-group">
            <strong>Start Date:</strong>
            <input
                id="start-date"
                type="date"
                name="startDate"
                class="form-control"
                placeholder="Start Date">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 text-center">
        <div class="form-group">
            <strong>End Date:</strong>
            <input
                id="end-date"
                type="date"
                name="endDate"
                class="form-control"
                placeholder="End Date">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
        <span class="btn btn-primary interactions"><i class="fa fa-share-alt"></i></span>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <span class="btn btn-primary interactions-list"><i class="fa fa-th-list"></i></span>
    </div>
</div>

@if(!empty($warning))
    <script type="text/javascript" async>
        alert('{{ $warning }}');
    </script>
@endif
