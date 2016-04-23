<head>
    <link href="{{url('css/style.css')}}" rel="stylesheet"/>
    <link href="{{url('css/earth.css')}}" rel="stylesheet"/>
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
        Earth is the third planet from the Sun, the densest planet in the Solar System, the largest of the Solar
        System's four terrestrial planets, and the only astronomical object known to harbor life.
    </p>

    <p>
        The modern English word Earth developed from a wide variety of Middle English forms,
        which derived from an Old English noun most often spelled eorðe.
        It has cognates in every Germanic language, and their proto-Germanic root has been reconstructed as *erþ?. In
        its earliest appearances,
        eorðe was already being used to translate the many senses of Latin terra and Greek ?? (g?): the ground,
        its soil, dry land, the human world, the surface of the world (including the sea), and the globe itself.
        As with Terra and Gaia, Earth was a personified goddess in Germanic paganism: the Angles were listed by Tacitus
        as among the devotees of Nerthus,
        and later Norse mythology included Jörð, a giantess often given as the mother of Thor.
    </p>

    <br/>
    <b>Radius:</b> 3,959 mi<br/>
    <b>Age:</b> 4.543 billion years<br/>
    <b>Distance from Sun:</b> 92.96 million mi<br/>
    <b>Area:</b> 196.9 million mi<br/>
    <b>Mass:</b> 5.972 * 10^24 kg<br/>
    <b>Population:</b> 7.125 billion (2013) World Bank<br/>

</div>
{{--End of description--}}
<div id="universe" class="scale-stretched">
    <div id="galaxy">
        <div id="before-planet">

        </div>

        <div id="earth" style="margin-top:15%"></div>
    </div>

</div>

<script src="{{url('js/jquery-2.1.3.min.js')}}"></script>
{{--<script src="{{url('js/anim.js')}}"></script>--}}
</body>