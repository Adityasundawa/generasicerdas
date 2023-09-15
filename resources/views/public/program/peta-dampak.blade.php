@extends('layouts.main')

@section('content')
    @include('partials.breadcrumb-area')
    <section id="about" class="about-area about-p pt-100 pb-160 p-relative">
        <div class="container">
            <div class="card mg-b-20"style="display:block">

                <div class="card-body">
                    <div id="map" class="map map-home"
                        style="width:  2000px; height: 400px; position: relative; outline-style: none;"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="pt-70 pb-70">
        <div class="container">
            <div class="portfolio ">
                <div class="row align-items-center mb-70">
                    <div class="col-lg-5">
                        <div class="section-title cta-title  pl-15">
                            <h2>Galery</h2>
                            <img src="{{ url('/') }}/assets/img/bg/t-r-line.png">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="my-masonry">
                            <div class="button-group filter-button-group ">
                                <button class="active" data-filter="*">All</button>
                                <button data-filter=".jakarta">Jakarta</button>
                                <button data-filter=".bogor">Bogor</button>
                                <button data-filter=".depok">Depok</button>
                                <button data-filter=".tangerang">Tangerang</button>
                                <button data-filter=".bekasi">Bekasi</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="grid col3" style="position: relative; height: 491.938px;">
                    <div class="grid-item jakarta" style="position: absolute; left: 0%; top: 0px;">
                        <a href="projects-detail.html">
                            <figure class="gallery-image">
                                <img src="{{ url('/') }}/assets/img/petadampak/1.jpeg" alt="img" class="img">
                                <figcaption>
                                    <div class="icon">+</div>
                                    <span>Jakarta</span>
                                    <h4></h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="grid-item jakarta bogor" style="position: absolute; left: 33.3333%; top: 0px;">
                        <a href="projects-detail.html">
                            <figure class="gallery-image">
                                <img src="{{ url('/') }}/assets/img/petadampak/2.jpg" alt="img" class="img">
                                <figcaption>
                                    <div class="icon">+</div>
                                    <span>bogor</span>
                                    <h4></h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="grid-item depok" style="position: absolute; left: 66.6667%; top: 0px;">
                        <a href="projects-detail.html">
                            <figure class="gallery-image">
                                <img src="{{ url('/') }}/assets/img/petadampak/3.jpg" alt="img" class="img">
                                <figcaption>
                                    <div class="icon">+</div>
                                    <span>depok</span>
                                    <h4></h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="grid-item tangerang" style="position: absolute; left: 0%; top: 245px;">
                        <a href="projects-detail.html">
                            <figure class="gallery-image">
                                <img src="{{ url('/') }}/assets/img/petadampak/4.jpg" alt="img" class="img">
                                <figcaption>
                                    <div class="icon">+</div>
                                    <span>tangerang</span>
                                    <h4></h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="grid-item bekasi" style="position: absolute; left: 33.3333%; top: 245px;">
                        <a href="projects-detail.html">
                            <figure class="gallery-image">
                                <img src="{{ url('/') }}/assets/img/petadampak/5.jpg" alt="img" class="img">
                                <figcaption>
                                    <div class="icon">+</div>
                                    <span>bekasi</span>
                                    <h4></h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="grid-item jakarta" style="position: absolute; left: 66.6667%; top: 245px;">
                        <a href="projects-detail.html">
                            <figure class="gallery-image">
                                <img src="{{ url('/') }}/assets/img/petadampak/6.jpg" alt="img" class="img">
                                <figcaption>
                                    <div class="icon">+</div>
                                    <span>jakarta</span>
                                    <h4></h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        var cities = L.layerGroup();



        -
        6.570289, 106.775750

        var jakarta = '<div class="row"><div class="col-12"><img src="{{ url('/') }}/assets/' +
            'img/petadampak/1.jpeg' + '" class="' + 'img' +
            '"  width="80px" height="80px" /></div></div>';
        L.marker([-6.2128128, 106.8793856]).bindPopup(jakarta).addTo(cities);

        var bogor = '<div class="row"><div class="col-12"><img src="{{ url('/') }}/assets/' +
            'img/petadampak/2.jpg' + '" class="' + 'img' +
            '"  width="80px" height="80px" /></div></div>';
        L.marker([-6.570289, 106.775750]).bindPopup(bogor).addTo(cities);

        var depok = '<div class="row"><div class="col-12"><img src="{{ url('/') }}/assets/' +
            'img/petadampak/3.jpg' + '" class="' + 'img' +
            '"  width="80px" height="80px" /></div></div>';
        L.marker([-6.431171, 106.800282]).bindPopup(depok).addTo(cities);

        var tangerang = '<div class="row"><div class="col-12"><img src="{{ url('/') }}/assets/' +
            'img/petadampak/5.jpg' + '" class="' + 'img' +
            '"  width="80px" height="80px" /></div></div>';
        L.marker([-6.202622, 106.698780]).bindPopup(tangerang).addTo(cities);

        var bekasi = '<div class="row"><div class="col-12"><img src="{{ url('/') }}/assets/' +
            'img/petadampak/6.jpg' + '" class="' + 'img' +
            '"  width="80px" height="80px" /></div></div>';
        L.marker([-6.202280, 106.988888]).bindPopup(bekasi).addTo(cities);




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
