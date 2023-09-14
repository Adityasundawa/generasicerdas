@extends('admin.layouts.app')

@section('content')
    <div class="content-body" style="min-height: 788px;">
        <div class="container-fluid">
            <!-- Add Order -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Relawan / Donatur</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Name</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Agama</th>
                                            <th>No. Telepon</th>
                                            <th>Minat dan Bakat</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($relawans as $relawan)
                                        <tr>
                                            <td><strong>{{ $relawan->nik }}</strong></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="w-space-no">{{ $relawan->nama }}</span>
                                                </div>
                                            </td>
                                            <td>{{ $relawan->alamat }}</td>
                                            <td>{{ $relawan->email }}</td>
                                            <td>{{ $relawan->jenis_kelamin }}</td>
                                            <td>{{ $relawan->tanggal_lahir }}</td>
                                            <td>{{ $relawan->kewarganegaraan }}</td>
                                            <td>{{ $relawan->agama }}</td>
                                            <td>{{ $relawan->no_telpon }}</td>
                                            <td>{{ $relawan->minat_bakat }}</td>
                                            <td>{{ $relawan->foto }}</td>
                                            <td>{{ $relawan->role }}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
