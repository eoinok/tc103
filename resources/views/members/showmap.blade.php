@extends('layouts.app')
 @csrf
 @section('content')
 <div id="mapid"  style="width: 100%; height: 400px;"></div>
 <script>
     var mymap = L.map('mapid');
     var icon = new L.Icon();
     icon.options.shadowSize = [0,0];
     icon.options.iconSize = [20, 40];
     icon.options.iconAnchor = [10, 70];
     icon.options.iconUrl = "{{asset('images/vendor/leaflet/dist/marker-icon.png')}}";
     L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZW9rZW5uZWQiLCJhIjoiY2s4aW0xaHJxMDE2cDNncGE1ejM0azg1dCJ9.075xnafoO0SJDywlU88W6A', {
         attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         maxZoom: 18,
         id: 'mapbox/streets-v11',
         tileSize: 512,
         zoomOffset: -1,
     }).addTo(mymap);
 mymap.setView(new L.LatLng(53.4053, -6.3784), 13);
 </script>
 @endsection