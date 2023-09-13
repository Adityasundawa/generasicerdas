@extends('layouts.main')

@section('content')
    @include('partials.breadcrumb-area')
    <section id="about" class="about-area about-p pt-55 pb-170 p-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-content s-about-content">
                        <form action="{{ url('/generasi-cerdas') }}" method="post">
                            @csrf
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <label for="nik">NIK</label>
                                    <input required type="text" id="nik" name="nik" placeholder="Masukkan NIK Anda">
                                    <span class="text-danger">{{ $errors->first('nik') }}</span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <label for="nama">Nama</label>
                                    <input required type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <label for="alamat">Alamat</label>
                                    <textarea id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <label for="email">Email</label>
                                    <input required type="email" id="email" name="email" placeholder="Masukkan Email Anda">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
