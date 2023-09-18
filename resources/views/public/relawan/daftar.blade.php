@extends('layouts.main')

@section('content')
@include('partials.breadcrumb-area')
<section id="about" class="about-area about-p pt-55 pb-170 p-relative">

    <div class="container">
        <h2>Daftar Relawan</h2>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Minat & Bakat</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                         ?>
                        @foreach ($relawan as $item)
                        <?php
                        $i;
                         ?>
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{$item['nama']}}</td>
                            <td>{{$item['alamat']}}</td>
                            <td>{!!$item['minat_bakat']!!}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>
@endsection
