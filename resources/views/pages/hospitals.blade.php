@extends('layouts.app')

@section('head')
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css" rel="stylesheet" />
    <style>
        #map { position: absolute; top: 0px; bottom: 0; width: 100%; }
    </style>
@endsection

@section('body')
    <div id="map"></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoia2hheXJ1bDAxIiwiYSI6ImNrMm5pa3F2bDAwdzUzY3FxNW96YjA0NDgifQ.n4_3fq5OTRVWgyo0cbLl-g';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
        });
        map.on('load', function() {
        });
    </script>
@endsection
