<div class="row">
    <div class="col-lg-6">
        {{ $person->name }}
    </div>

    <div class="col-lg-6 margin-tb">
        <div class="pull-right">
            <span class="btn btn-primary btn-sm back" data-id="{{ $person->id }}"> <i class="fa fa-undo"></i></span>
        </div>
    </div>
</div>

<hr/>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active"
           id="nav-sector01-tab"
           data-toggle="tab"
           href="#nav-sector01"
           role="tab"
           aria-controls="nav-home"
           aria-selected="true">Sector 01
        </a>
        <a class="nav-item nav-link"
           id="nav-sector02-tab"
           data-toggle="tab"
           href="#nav-sector02"
           role="tab"
           aria-controls="nav-profile"
           aria-selected="false">Sector 02
        </a>
        <a class="nav-item nav-link"
           id="nav-sector03-tab"
           data-toggle="tab"
           href="#nav-sector03"
           role="tab"
           aria-controls="nav-contact"
           aria-selected="false">Sector 03
        </a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active"
         id="nav-sector01"
         role="tabpanel"
         aria-labelledby="nav-sector01-tab">
        <canvas id="canvas" width="720" height="480"></canvas>
    </div>
    <div class="tab-pane fade"
         id="nav-sector02"
         role="tabpanel"
         aria-labelledby="nav-sector02-tab">
        <canvas id="canvas" width="720" height="480"></canvas>
    </div>
    <div class="tab-pane fade"
         id="nav-sector03"
         role="tabpanel"
         aria-labelledby="nav-sector03-tab">
        <canvas id="canvas" width="720" height="480"></canvas>
    </div>
</div>

<script type="text/javascript" async>
    // Current Location
    $(function() {
        const canvas = $('#canvas')[0];
        const ctx = canvas.getContext('2d');

        ctx.fillStyle = '#3399FF';
        ctx.strokeStyle = '#000000';
        ctx.lineWidth = 1;

        let x = {{ $deviceLocations[0]->location_x ?? 0 }} * 16;
        let y = {{ $deviceLocations[0]->location_y ?? 0 }} * 16;

        ctx.beginPath();
        ctx.rect(0, 0, 720, 480);
        ctx.stroke();
        ctx.closePath();

        ctx.strokeStyle = '#3399FF';
        x = x + 8;
        y = y + 8;
        ctx.beginPath();
        ctx.arc(x, y, 8, 0, Math.PI*2);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
    });
</script>
