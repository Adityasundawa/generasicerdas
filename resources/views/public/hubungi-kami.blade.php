@extends('layouts.main')

@section('content')
@include('partials.breadcrumb-area')
<section id="contact" class="contact-area contact-bg pt-90 pb-100 p-relative fix" style="background-image:url(img/bg/contact_bg.png); background-size: cover;background-repeat: no-repeat;">
    <div class="map"><img src="{{url('/')}}/assets/img/bg/map.png" alt="peta"></div>
    <div class="container">

        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mb-60">
                    <h2>Hubungi Kami</h2>
                    <img src="{{url('/')}}/assets/img/bg/t-r-line.png">
                </div>
                <form action="#" class="contact-form ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-name mb-20">
                                <input type="text" placeholder="Tulis nama lengkap Anda">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-email mb-20">
                                <input type="text" placeholder="Tulis email Anda">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-subject mb-20">
                                <input type="text" placeholder="Saya ingin membahas tentang">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-message mb-45">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Tulis komentar Anda"></textarea>
                            </div>
                            <div class="slider-btn">
                                <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Kirim Pesan</a>
                                <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection
