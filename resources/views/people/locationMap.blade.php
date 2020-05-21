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
           id="nav-zone01-tab"
           data-toggle="tab"
           href="#nav-zone01"
           role="tab"
           aria-controls="nav-home"
           aria-selected="true">Zone 01
        </a>
        <a class="nav-item nav-link"
           id="nav-zone02-tab"
           data-toggle="tab"
           href="#nav-zone02"
           role="tab"
           aria-controls="nav-profile"
           aria-selected="false">Zone 02
        </a>
        <a class="nav-item nav-link"
           id="nav-zone03-tab"
           data-toggle="tab"
           href="#nav-zone03"
           role="tab"
           aria-controls="nav-contact"
           aria-selected="false">Zone 03
        </a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active"
         id="nav-zone01"
         role="tabpanel"
         aria-labelledby="nav-zone01-tab">
        <canvas id="canvas" width="720" height="480"></canvas>
    </div>
    <div class="tab-pane fade"
         id="nav-zone02"
         role="tabpanel"
         aria-labelledby="nav-zone02-tab">
        <canvas id="canvas" width="720" height="480"></canvas>
    </div>
    <div class="tab-pane fade"
         id="nav-zone03"
         role="tabpanel"
         aria-labelledby="nav-zone03-tab">
        <canvas id="canvas" width="720" height="480"></canvas>
    </div>
</div>

<script type="text/javascript" async>
    $(function() {
        const canvas = $('#canvas')[0];
        const ctx = canvas.getContext('2d');

        ctx.fillStyle = '#3399FF';
        ctx.strokeStyle = '#000000';
        ctx.lineWidth = 1;

        // Draw zone with sectors
        let x = 0;
        let y = 0;
        let w = {{ $zones['zone_x_length'] }} * 5;
        let h = {{ $zones['zone_y_width'] }} * 5;
        ctx.beginPath();
        ctx.rect(0, 0, w, h);
        ctx.stroke();
        ctx.closePath();

        x = {{ $zones['sectors'][0]['initial_x'] }} * 5
        y = {{ $zones['sectors'][0]['initial_y'] }} * 5
        w = {{ $zones['sectors'][0]['x_length'] }} * 5;
        h = {{ $zones['sectors'][0]['y_width'] }} * 5;
        ctx.beginPath();
        ctx.rect(x, y, w, h);
        ctx.stroke();
        ctx.closePath();

        x = {{ $zones['sectors'][1]['initial_x'] }} * 5
        y = {{ $zones['sectors'][1]['initial_y'] }} * 5
        w = {{ $zones['sectors'][1]['x_length'] }} * 5;
        h = {{ $zones['sectors'][1]['y_width'] }} * 5;
        ctx.beginPath();
        ctx.rect(x, y, w, h);
        ctx.stroke();
        ctx.closePath();

        x = {{ $zones['sectors'][2]['initial_x'] }} * 5
        y = {{ $zones['sectors'][2]['initial_y'] }} * 5
        w = {{ $zones['sectors'][2]['x_length'] }} * 5;
        h = {{ $zones['sectors'][2]['y_width'] }} * 5;
        ctx.beginPath();
        ctx.rect(x, y, w, h);
        ctx.stroke();
        ctx.closePath();

        // Current Location
        x = {{ $deviceLocations[0]->location_x ?? 0 }} * 5;
        y = {{ $deviceLocations[0]->location_y ?? 0 }} * 5;

        ctx.strokeStyle = '#3399FF';
        x = x + 5;
        y = y + 5;
        ctx.beginPath();
        ctx.arc(x, y, 5, 0, Math.PI*2);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
    });
</script>
