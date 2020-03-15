@extends('layouts.app')

@section('head')
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        #map { position: absolute; top: 0px; bottom: 0; width: 100%; }
    </style>
@endsection

@section('body')
    <div id="map"></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoia2hheXJ1bDAxIiwiYSI6ImNrMm5pa3F2bDAwdzUzY3FxNW96YjA0NDgifQ.n4_3fq5OTRVWgyo0cbLl-g';
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
            center: [-74.5, 40], // starting position [lng, lat]
            zoom: 9 // starting zoom
            calculateRoute(center, [-74.54, 40]);
        });

        
        function calculateRoute(geomFrom, geomTo) {
            var lngFrom = geomFrom[0]
            var latFrom = geomFrom[1]

            var lngTo = geomTo[0]  
            var latTo = geomTo[1]

            $.get('https://api.mapbox.com/directions/v5/mapbox/cycling/' + lngFrom + ',' + latFrom + ';' + lngTo + ',' + latTo + '?access_token=pk.eyJ1IjoicHJheWVyIiwiYSI6ImI3OGRjZjcyY2JiZTUzODMwZWUxZDdiNjRiMWE4NjI5In0.zETX-x6-XPpAv3zt4MiFwg', 
            function( data ) {
                var coords = polyline.decode(data.routes[0].geometry);

                var line = L.polyline(coords).addTo(mapTwo);

            });  
        };
    </script>
@endsection