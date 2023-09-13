@extends('layouts.main')

@section('content')
@include('partials.breadcrumb-area')
<section id="blog" class="blog-area  p-relative pt-95 pb-90 fix">
    <div class="container">
        
        <div class="row">

            <!-- First Card -->
            <div class="col-lg-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/img/donatur/1.jpg" class="card-img-custom" alt="Image 1" srcset="">
                    </div>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-lg-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/img/donatur/2.png" class="card-img-custom" alt="Image 2" srcset="">
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="col-lg-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/img/donatur/3.png" class="card-img-custom" alt="Image 3" srcset="">
                    </div>
                </div>
            </div>

            <!-- Fourth Card -->
            <div class="col-lg-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/img/donatur/4.png" class="card-img-custom" alt="Image 4" srcset="">
                    </div>
                </div>
            </div>

            <!-- Fifth Card -->
            <div class="col-lg-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/img/donatur/5.png" class="card-img-custom" alt="Image 5" srcset="">
                    </div>
                </div>
            </div>

            <!-- Sixth Card -->
            <div class="col-lg-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/img/donatur/6.png" class="card-img-custom" alt="Image 6" srcset="">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
