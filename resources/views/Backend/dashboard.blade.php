@extends("Backend.layouts.app")

@section("title", "Dashboard")

@section("content")

{{-- start::Page Header --}}
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-secondary">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h1 class="heading">Dashboard</h1>
                {{-- <small class="text-muted">Provide better communication with your customers</small> --}}
            </div>
        </div>
    </div>
</div>
{{-- end::Page Header --}}

{{-- start::Page Container --}}
<div class="container-fluid">
    {{-- <div class="jumbotron">
        <h1>Hello, Admin!</h1>
        <p class="text">Welcome to NikkAdmin!</p>
    </div> --}}
    <div class="row">
        <div class="col-sm-8 pr-sm-0">
            <div class="card-box card">
                <div class="card-header">
                    <h3 class="card-heading">Line Chart</h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div class="wrapper">
                            <canvas id='c'></canvas>
                            <div class="label">text</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-box card" style="height: 421px; background: #2421cd; color: #fff;">
                <div class="card-header" style="background: #2421cd;">
                    <h3 class="card-heading" style="color: #fff;">Todo</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="background: #2421cd;">Cras justo odio</li>
                        <li class="list-group-item" style="background: #2421cd;">Dapibus ac facilisis in</li>
                        <li class="list-group-item" style="background: #2421cd;">Morbi leo risus</li>
                        <li class="list-group-item" style="background: #2421cd;">Porta ac consectetur ac</li>
                        <li class="list-group-item" style="background: #2421cd;">Vestibulum at eros</li>
                        <li class="list-group-item" style="background: #2421cd;">Morbi leo risus</li>
                        <li class="list-group-item" style="background: #2421cd;"><a href="#!" class="btn btn-primary btn-block">View More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box card">
                <div class="card-header">
                    <h3 class="card-heading">Default Tables</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-dagrk">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        @mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>
                                        @fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        @twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card text-white bg-primary mb-3" draggable="true">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end::Page Container --}}

<script type="text/javascript">
    var label = document.querySelector(".label");
    var c = document.getElementById("c");
    var ctx = c.getContext("2d");
    var cw = c.width = 700;
    var ch = c.height = 350;
    var cx = cw / 2,
        cy = ch / 2;
    var rad = Math.PI / 180;
    var frames = 0;

    ctx.lineWidth = 1;
    ctx.strokeStyle = "#0186d4";
    ctx.fillStyle = "#ccc";
    ctx.font = "14px monospace";

    var grd = ctx.createLinearGradient(0, 0, 0, cy);
    grd.addColorStop(0, "hsla(167,72%,60%,1)");
    grd.addColorStop(1, "hsla(167,72%,60%,0)");

    var oData = {
        "2008": 10,
        "2009": 39.9,
        "2010": 17,
        "2011": 30.0,
        "2012": 5.3,
        "2013": 38.4,
        "2014": 15.7,
        "2015": 9.0
    };

    var valuesRy = [];
    var propsRy = [];
    for (var prop in oData) {

        valuesRy.push(oData[prop]);
        propsRy.push(prop);
    }


    var vData = 4;
    var hData = valuesRy.length;
    var offset = 50.5; //offset chart axis
    var chartHeight = ch - 2 * offset;
    var chartWidth = cw - 2 * offset;
    var t = 1 / 7; // curvature : 0 = no curvature
    var speed = 2; // for the animation

    var A = {
        x: offset,
        y: offset
    }
    var B = {
        x: offset,
        y: offset + chartHeight
    }
    var C = {
        x: offset + chartWidth,
        y: offset + chartHeight
    }

    /*
      A  ^
      |  |
      + 25
      |
      |
      |
      + 25
      |__|_________________________________  C
      B
    */

    // CHART AXIS -------------------------
    ctx.beginPath();
    ctx.moveTo(A.x, A.y);
    ctx.lineTo(B.x, B.y);
    ctx.lineTo(C.x, C.y);
    ctx.stroke();

    // vertical ( A - B )
    var aStep = (chartHeight - 50) / (vData);

    var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
    var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
    var aStepValue = (Max - Min) / (vData);
    console.log("aStepValue: " + aStepValue); //8 units
    var verticalUnit = aStep / aStepValue;

    var a = [];
    ctx.textAlign = "right";
    ctx.textBaseline = "middle";
    for (var i = 0; i <= vData; i++) {

        if (i == 0) {
            a[i] = {
                x: A.x,
                y: A.y + 25,
                val: Max
            }
        } else {
            a[i] = {}
            a[i].x = a[i - 1].x;
            a[i].y = a[i - 1].y + aStep;
            a[i].val = a[i - 1].val - aStepValue;
        }
        drawCoords(a[i], 3, 0);
    }

    //horizontal ( B - C )
    var b = [];
    ctx.textAlign = "center";
    ctx.textBaseline = "hanging";
    var bStep = chartWidth / (hData + 1);

    for (var i = 0; i < hData; i++) {
        if (i == 0) {
            b[i] = {
                x: B.x + bStep,
                y: B.y,
                val: propsRy[0]
            };
        } else {
            b[i] = {}
            b[i].x = b[i - 1].x + bStep;
            b[i].y = b[i - 1].y;
            b[i].val = propsRy[i]
        }
        drawCoords(b[i], 0, 3)
    }

    function drawCoords(o, offX, offY) {
        ctx.beginPath();
        ctx.moveTo(o.x - offX, o.y - offY);
        ctx.lineTo(o.x + offX, o.y + offY);
        ctx.stroke();

        ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
    }
    //----------------------------------------------------------

    // DATA
    var oDots = [];
    var oFlat = [];
    var i = 0;

    for (var prop in oData) {
        oDots[i] = {}
        oFlat[i] = {}

        oDots[i].x = b[i].x;
        oFlat[i].x = b[i].x;

        oDots[i].y = b[i].y - oData[prop] * verticalUnit - 25;
        oFlat[i].y = b[i].y - 25;

        oDots[i].val = oData[b[i].val];

        i++
    }



    ///// Animation Chart ///////////////////////////
    //var speed = 3;
    function animateChart() {
        requestId = window.requestAnimationFrame(animateChart);
        frames += speed; //console.log(frames)
        ctx.clearRect(60, 0, cw, ch - 60);

        for (var i = 0; i < oFlat.length; i++) {
            if (oFlat[i].y > oDots[i].y) {
                oFlat[i].y -= speed;
            }
        }
        drawCurve(oFlat);
        for (var i = 0; i < oFlat.length; i++) {
            ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
            ctx.beginPath();
            ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
            ctx.fill();
        }

        if (frames >= Max * verticalUnit) {
            window.cancelAnimationFrame(requestId);

        }
    }
    requestId = window.requestAnimationFrame(animateChart);

    /////// EVENTS //////////////////////
    c.addEventListener("mousemove", function(e) {
        label.innerHTML = "";
        label.style.display = "none";
        this.style.cursor = "default";

        var m = oMousePos(this, e);
        for (var i = 0; i < oDots.length; i++) {

            output(m, i);
        }

    }, false);

    function output(m, i) {
        ctx.beginPath();
        ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
        if (ctx.isPointInPath(m.x, m.y)) {
            //console.log(i);
            label.style.display = "block";
            label.style.top = (m.y + 10) + "px";
            label.style.left = (m.x + 10) + "px";
            label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
            c.style.cursor = "pointer";
        }
    }

    // CURVATURE
    function controlPoints(p) {
        // given the points array p calculate the control points
        var pc = [];
        for (var i = 1; i < p.length - 1; i++) {
            var dx = p[i - 1].x - p[i + 1].x; // difference x
            var dy = p[i - 1].y - p[i + 1].y; // difference y
            // the first control point
            var x1 = p[i].x - dx * t;
            var y1 = p[i].y - dy * t;
            var o1 = {
                x: x1,
                y: y1
            };

            // the second control point
            var x2 = p[i].x + dx * t;
            var y2 = p[i].y + dy * t;
            var o2 = {
                x: x2,
                y: y2
            };

            // building the control points array
            pc[i] = [];
            pc[i].push(o1);
            pc[i].push(o2);
        }
        return pc;
    }

    function drawCurve(p) {

        var pc = controlPoints(p); // the control points array

        ctx.beginPath();
        //ctx.moveTo(p[0].x, B.y- 25);
        ctx.lineTo(p[0].x, p[0].y);
        // the first & the last curve are quadratic Bezier
        // because I'm using push(), pc[i][1] comes before pc[i][0]
        ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

        if (p.length > 2) {
            // central curves are cubic Bezier
            for (var i = 1; i < p.length - 2; i++) {
                ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
            }
            // the first & the last curve are quadratic Bezier
            var n = p.length - 1;
            ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
        }

        //ctx.lineTo(p[p.length-1].x, B.y- 25);
        ctx.stroke();
        ctx.save();
        ctx.fillStyle = grd;
        ctx.fill();
        ctx.restore();
    }

    function arrayMax(array) {
        return Math.max.apply(Math, array);
    };

    function arrayMin(array) {
        return Math.min.apply(Math, array);
    };

    function oMousePos(canvas, evt) {
        var ClientRect = canvas.getBoundingClientRect();
        return { //objeto
            x: Math.round(evt.clientX - ClientRect.left),
            y: Math.round(evt.clientY - ClientRect.top)
        }
    }
</script>

@endsection()
