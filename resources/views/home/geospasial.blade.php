@extends('layouts.index_view')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
<style>
    #map { height: 500px; }
</style>
@endsection

@section('content')

<div id="main-content">
    <section class="section">
        <div class="card">
            <div id="map">

            </div>
        </div>
</div>
</section>
</div>
@endsection

@section('script')
<script>
var map = L.map('map').setView([-7.1293590881394024, 110.4034697667127], 20);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</script>

@endsection
