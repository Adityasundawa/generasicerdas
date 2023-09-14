@extends('layouts.main')

@section('content')
    @include('partials.breadcrumb-area')
    <section id="about" class="about-area about-p pt-55 pb-170 p-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-12">
                        <div class="contact-field p-relative c-name mb-20">
                            <label id="jenis">Pilih Jenis Pendaftaran</label>
                            <button class="btn btn-lg ml-2 mt-2" id="donatur">Daftar Menjadi Donatur</button>
                            <button class="btn btn-lg ml-2 mt-2" id="relawan">Daftar Menjadi Relawan</button>
                        </div>
                    </div>

                    <div id="donatur_card">
                        <h4>Form Pendaftaran Donatur</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="about-content s-about-content">
                                    <form action="{{ url('/generasi-cerdas') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="nik">NIK</label>
                                                <input required type="text" id="nik" name="nik"
                                                    placeholder="Masukkan NIK Anda">
                                                <span class="text-danger">{{ $errors->first('nik') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="nama">Nama</label>
                                                <input required type="text" id="nama" name="nama"
                                                    placeholder="Masukkan Nama Anda">
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
                                                <input required type="email" id="email" name="email"
                                                    placeholder="Masukkan Email Anda">
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
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input required type="date" id="tanggal_lahir" name="tanggal_lahir">
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                                <input required type="text" id="kewarganegaraan" name="kewarganegaraan"
                                                    placeholder="Masukkan Kewarganegaraan Anda">
                                                <span class="text-danger">{{ $errors->first('kewarganegaraan') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="agama">Agama</label>
                                                <select id="agama" class="form-control" name="agama">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                    <!-- Tambahkan lebih banyak agama yang umum di Indonesia sesuai kebutuhan -->
                                                </select>
                                                <span class="text-danger">{{ $errors->first('agama') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="no_telpon">Nomor Telepon</label>
                                                <input required type="text" id="no_telpon" name="no_telpon"
                                                    placeholder="Masukkan Nomor Telepon Anda">
                                                <span class="text-danger">{{ $errors->first('no_telpon') }}</span>
                                            </div>
                                        </div>


                                        <input type="hidden" name="role" value="Donatur" id="">
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
                    <div id="relawan_card">
                        <h4>Form Pendaftaran Relawan</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="about-content s-about-content">
                                    <form action="{{ url('/generasi-cerdas') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="nik">NIK</label>
                                                <input required type="text" id="nik" name="nik"
                                                    placeholder="Masukkan NIK Anda">
                                                <span class="text-danger">{{ $errors->first('nik') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="nama">Nama</label>
                                                <input required type="text" id="nama" name="nama"
                                                    placeholder="Masukkan Nama Anda">
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
                                                <input required type="email" id="email" name="email"
                                                    placeholder="Masukkan Email Anda">
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
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input required type="date" id="tanggal_lahir" name="tanggal_lahir">
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                                <input required type="text" id="kewarganegaraan"
                                                    name="kewarganegaraan" placeholder="Masukkan Kewarganegaraan Anda">
                                                <span class="text-danger">{{ $errors->first('kewarganegaraan') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="agama">Agama</label>
                                                <select id="agama" class="form-control" name="agama">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                    <!-- Tambahkan lebih banyak agama yang umum di Indonesia sesuai kebutuhan -->
                                                </select>
                                                <span class="text-danger">{{ $errors->first('agama') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="no_telpon">Nomor Telepon</label>
                                                <input required type="text" id="no_telpon" name="no_telpon"
                                                    placeholder="Masukkan Nomor Telepon Anda">
                                                <span class="text-danger">{{ $errors->first('no_telpon') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="minat_bakat">Minat dan Bakat</label>
                                                <input required type="text" id="minat_bakat" name="minat_bakat"
                                                    placeholder="Masukkan Minat dan Bakat Anda">
                                                <span class="text-danger">{{ $errors->first('minat_bakat') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-field p-relative c-name mb-20">
                                                <label for="foto">Foto</label>
                                                <input required type="file" id="foto" name="foto">
                                                <span class="text-danger">{{ $errors->first('foto') }}</span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="role" value="Relawan" id="">
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
                </div>

            </div>
        </div>
    </section>
@endsection
