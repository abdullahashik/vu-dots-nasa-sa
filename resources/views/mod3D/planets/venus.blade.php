<head>
    <link href="{{url('css/style.css')}}" rel="stylesheet"/>
    <link href="{{url('css/venus.css')}}" rel="stylesheet"/>
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
                Venus is the second planet from the Sun, orbiting it every 224.7 Earth days. It has the longest rotation period of any planet in the Solar System and rotates in the opposite direction to most other planets. It has no natural satellite
            </p>


            <br/>
            <b>Radius:</b> 3,760 mi<br/>
            <b>Age:</b> 4.6 billion years<br/>
            <b>Distance from Sun:</b> 67.24 million mi<br/>
            <b>Length of day:</b> 116d 18h 0m<br/>
            <b>Orbital period:</b> 225 days<br/>
            <b>Gravity:</b> 8.87 m/s<sup>2</sup><br/>
            <b>Mass:</b> 4.867 × 10^24 kg<br/>
        </div>


    </div>
    {{--End of description--}}
    <div id="galaxy">
        <div id="earth" style="margin-top:15%"></div>
    </div>
</div>
<script src="{{url('js/jquery-2.1.3.min.js')}}"></script>
</body>