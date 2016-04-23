<head>
    <link href="{{url('css/style.css')}}" rel="stylesheet"/>
    <link href="{{url('css/stytle2.css')}}" rel="stylesheet"/>
</head>
<body class="opening hide-UI view-2D zoom-large data-close controls-close">
<div id="navbar">
    <a id="toggle-data" href="#data"><i class="icon-data"></i>Planets</a>

    <h1>Galaxy Tour with NASA</h1>
    <a id="toggle-controls" href="#controls"><i class="icon-controls"></i>Options</a>
</div>

<div id="controls">

    <label><a href="#">Deep Space Learning</a></label>
    <label><a href="{{url('history')}}">NASA Space Events</a></label>
    <label><a href="{{url('bio')}}">NASA Astronaut Bios</a></label>
    <label><a href="{{url('history')}}">Historic Places</a></label>
    <label><a href="#">NASA Missions</a></label>
    <label><a href="{{url('travel')}}">Take A Tour With NASA</a></label>

</div>
<div style="padding-top: 450px;float: right;" id="paginate">
    {{$history->render()}}
</div>
<div id="universe" class="scale-stretched">

    <div class="curve2">Dummy content</div>

    @foreach($history as $data)
        <div class="curve">
            <img src="{{url('images/nasa-logo.jpg')}}">

            <p>{{$data->details}}</p>

            <a href="#" class="w3-btn w3-ripple">More</a>

        </div>
        @endforeach
</div>
<style>
    #paginate ul{
        list-style: inline;
    }
    #paginate ul li{
        float: left;
        letter-spacing: 3px;
        width: 20px;
        display: block;
        background-color: white;
    }
</style>

<script src="{{url('js/jquery-2.1.3.min.js')}}"></script>
<script src="{{url('js/anim.js')}}"></script>
</body>