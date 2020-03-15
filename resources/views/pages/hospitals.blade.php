@extends('layouts.app')

@section('head')
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #map { position: absolute; top: 0px; bottom: 0; width: 100%; }
    </style>
@endsection

@section('body')
    <div id="map"></div>
    <script>
        window.addEventListener('load', function() {
        // executes when complete page is fully loaded, including all frames, objects and images
            alert("window is loaded");
            mapboxgl.accessToken = 'pk.eyJ1Ijoia2hheXJ1bDAxIiwiYSI6ImNrMm5pa3F2bDAwdzUzY3FxNW96YjA0NDgifQ.n4_3fq5OTRVWgyo0cbLl-g';
            var map = new mapboxgl.Map({
                container: 'map', // container id
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [-96, 37.8], // starting position
                    zoom: 3 // starting zoom
                });
                
                // Add geolocate control to the map.
                map.addControl(
                    new mapboxgl.GeolocateControl({
                    positionOptions: {
                        enableHighAccuracy: true
                    },
                    trackUserLocation: true
                })
            );
        });
        
    </script>
@endsection
