<head>
    <link href="{{url('css/style.css')}}" rel="stylesheet"/>
    <link href="{{url('css/mars.css')}}" rel="stylesheet"/>
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
                Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, after Mercury
            </p>

            <br/>

            <p>Length of day: 1d 0h 40m</p>
            <p>Radius: 2,106 mi</p>
            <p>Distance from Sun: 141.6 million mi</p>
            <p>Mass: 6.39 × 10^23 kg (0.107 M?)</p>
            <p>Gravity: 3.711 m/s²</p>
            <p>Moons: Phobos, Deimos</p>
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