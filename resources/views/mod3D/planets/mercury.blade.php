<head>
    <link href="{{url('css/style.css')}}" rel="stylesheet"/>
    <link href="{{url('css/mercury.css')}}" rel="stylesheet"/>
</head>
<body class="opening view-2D zoom-large data-open controls-open">
<div id="navbar">
    <a id="toggle-data" href="#data"><i class="icon-data"></i>Planets</a>

    <h1>Galaxy Tour with Nasa</h1>
    <a id="toggle-menu" href="#menu"><i class="icon-controls"></i>Menu</a>
</div>
@include('mod3D.planets.layout')

<div id="universe" class="scale-stretched">
    {{--Start of description--}}
    <div id="after-planet" style="z-index: auto;">

        <div>
            <h3>Description</h3>
            <hr/>
            <p>
                Mercury is the smallest planet in the Solar System and the one closest to the Sun, with an orbital period of about 88 Earth days, which is much faster than any other planet in the Solar System.
            </p>

            <br/>

            <strong>Radius:</strong> 1,516 mi<br/>
            <strong>Distance from Sun:</strong> 35.98 million mi<br/>
            <strong>Mass:</strong> 3.285 × 10^23 kg (0.055 M?)<br/>
            <strong>Length of day:</strong> 58d 15h 30m<br/>
            <strong>Orbital period:</strong> 88 days<br/>
            <strong></strong>Gravity:</strong> 3.7 m/s²<br/>
        </div>


    </div>
    {{--End of description--}}
    <div id="galaxy">
        <div id="before-planet">

        </div>

        <div id="earth" style="margin-top:15%"></div>
    </div>

</div>

<script src="{{url('js/jquery-2.1.3.min.js')}}"></script>
</body>