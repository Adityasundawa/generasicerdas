@extends('layouts.main')

@section('content')
    @include('partials.breadcrumb-area')
     <section id="about" class="about-area about-p pt-100 pb-160 p-relative">
        <div class="container">
            <div class="card mg-b-20"style="display:block">

                <div class="card-body">
                    <div id="map" class="map map-home" style="width:  2000px; height: 400px; position: relative; outline-style: none;"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var cities = L.layerGroup();




        var text589 = '<div class="row"><div class="col-4"><img src="' +
            'https://cdn-icons-png.flaticon.com/512/149/149071.png' + '" class="' + 'img-fluid' +
            '"  width="500px" height="auto" /></div>   <div class="col-8"><table>' + '<tr><td>Nama</td><td>:</td><td>' +
            'Isa Setiawan' + '</td></tr>' + '<tr><td>Email</td><td>:</td><td>' + 'setiawanisa@gmail.com' + '</td></tr>' +
            '<tr><td>Nomor</td><td>:</td><td>' + '081252936620' + '</td></tr>' +
            '</table></div> </div>';
        L.marker([-6.2128128, 106.8793856]).bindPopup(text589).addTo(cities);


        var mbAttr = '',
            mbUrl =
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiaXNhYTIxIiwiYSI6ImNsZnc5dmQ3NDBmMjUzcW8zZzg0c2RnazgifQ.mphOBqpgqHl5ONLL092Txw';
        var grayscale = L.tileLayer(mbUrl, {
                maxZoom: 20,
                id: 'mapbox/satellite-v9',
                tileSize: 512,
                zoomOffset: -1,

            }),
            streets = L.tileLayer(mbUrl, {
                maxZoom: 20,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                attribution: mbAttr
            });
        var map = L.map('map', {
            center: [-6.289576896901706, 106.71141255004683],
            zoom: 10,
            layers: [streets, cities],

        });

        $('#ikon-map-full').on('click', function() {
            map.toggleFullscreen();
        });



        fetch("https://pilkada.rekapitung.id/geojson/tangsel.json").then(response => response.json())
            .then(json => {
                console.log(json.features)
                L.geoJSON(json.features[7]).addTo(map);
            });
        let i = 0;
        var baseLayers = {
            "Track": streets,
            "Satelit": grayscale,
        };

        var overlays = {
            "Cities": cities
        };

        L.control.layers(baseLayers, overlays).addTo(map);
        L.Control.geocoder().addTo(map);
    </script>
@endsection
