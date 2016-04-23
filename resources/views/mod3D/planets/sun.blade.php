<head>
    <link href="{{url('css/style.css')}}" rel="stylesheet"/>
    <link href="{{url('css/sun.css')}}" rel="stylesheet"/>
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
                The Sun (in Greek: Helios, in Latin: Sol[a]) is the star at the center of the Solar System and is by far the
                most important source
                of energy for life on Earth. It is a nearly perfect spherical ball of hot plasma, with internal
                convective motion that
                generates a magnetic field via a dynamo process.[15] Its diameter is about 109 times that of Earth, and it has a
                mass about 330,000
                times that of Earth, accounting for about 99.86% of the total mass of the Solar System.[16] About three quarters
                of the Sun's mass
                consists of hydrogen; the rest is mostly helium, with much smaller quantities of heavier elements, including
                oxygen, carbon,
                neon and iron.[17]
            </p>

            <p>
                The Sun is roughly middle aged and has not changed dramatically for over four billion[b] years,
                and will remain fairly stable for more than another five billion years. However, after hydrogen fusion in its
                core has
                stopped, the Sun will undergo severe changes and become a red giant. It is calculated that the Sun will become
                sufficiently
                large to engulf the current orbits of Mercury, Venus, and possibly Earth.
            </p>

            <p>
                The solar constant is the amount of power that the Sun deposits per unit area that is directly exposed to
                sunlight.
                The solar constant is equal to approximately 1,368 W/m2 (watts per square meter) at a distance of one
                astronomical unit
                (AU) from the Sun (that is, on or near Earth).[43] Sunlight on the surface of Earth is attenuated by Earth's
                atmosphere, so that
                less power arrives at the surface (closer to 1,000 W/m2) in clear conditions when the Sun is near the
                zenith.[44] Sunlight at the
                top of Earth's atmosphere is composed (by total energy) of about 50% infrared light, 40% visible light, and 10%
                ultraviolet light.[45]
                The atmosphere in particular filters out over 70% of solar ultraviolet, especially at the shorter
                wavelengths.[46] Solar ultraviolet
                radiation ionizes Earth's dayside upper atmosphere, creating the electrically conducting ionosphere.[47]

                The Sun's color is white, with a CIE color-space index near (0.3, 0.3), when viewed from space or when high in
                the sky;
                when low in the sky, atmospheric scattering renders the Sun yellow, red, orange, or magenta. Despite its typical
                whiteness,
                most people mentally picture the Sun as yellow; the reasons for this are the subject of debate.[48] The Sun is a
                G2V star,
                with G2 indicating its surface temperature of approximately 5,778 K (5,505 °C, 9,941 °F), and V that it, like
                most stars, is a
                main-sequence star.[49][50] The average luminance of the Sun is about 1.88 giga candela per square metre, but as
                viewed through
                Earth's atmosphere, this is lowered to about 1.44 Gcd/m2.[e] However, the luminance is not constant across the
                disk of the Sun
                (limb darkening).
            </p>

            <br/>
            <b>Radius:</b> 109 X Earth<br/>
            <b>Age:</b> 4.6 billion years<br/>
            <b>Distance from Earth:</b> 1.496×108 km 8 min 19 s at light speed<br/>
            <b>Area:</b> 12,000 x Earth<br/>
            <b>Mass:</b> 333,000 × Earth<br/>
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