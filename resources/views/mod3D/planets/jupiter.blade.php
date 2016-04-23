<head>
    <link href="{{url('css/style.css')}}" rel="stylesheet"/>
    <link href="{{url('css/jupiter.css')}}" rel="stylesheet"/>
</head>
<body class="opening view-2D zoom-large data-open controls-open">
<div id="navbar">
    <a id="toggle-data" href="#data"><i class="icon-data"></i>Planets</a>

    <h1>Galaxy Tour with Nasa</h1>
    <a id="toggle-menu" href="#menu"><i class="icon-controls"></i>Menu</a>
</div>
@include('mod3D.planets.layout')

{{--Start of description--}}
<div id="after-planet">
    <h3>Description</h3>
    <hr/>
    <p>
        Jupiter is the fifth planet from the Sun and the largest in the Solar System. It is a giant planet with a mass one-thousandth that of the Sun, but two and a half times that of all the other planets in the Solar System combined.
    </p>

    <br/>
    Radius: 43,441 mi
    Distance from Sun: 483.8 million mi
    Mass: 1.898 × 10^27 kg (317.8 M?)
    Length of day: 0d 9h 56m
    Gravity: 24.79 m/s²
    Moons: Europa, Ganymede, Io, Callisto, Amalthea, Ananke, More

</div>
{{--End of description--}}
<div id="universe" class="scale-stretched">
    <div id="galaxy">
        <div id="earth" style="margin-top:15%"></div>
    </div>
</div>
<script src="{{url('js/jquery-2.1.3.min.js')}}"></script>
</body>