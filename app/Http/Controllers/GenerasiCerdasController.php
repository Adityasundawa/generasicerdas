<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;

class GenerasiCerdasController extends Controller
{
    public function beranda()
    {
        $data['title'] = 'Beranda';
        $data['gambar'] = 'beranda.jpg';
        return view('public.beranda', $data);
    }

    public function tentangKami()
    {
        $data['title'] = 'Tentang Kami';
        $data['gambar'] = 'tentang.jpg';
        return view('public.tentang-kami.index', $data);
    }

    public function history()
    {
        $data['title'] = 'Sejarah';
        $data['gambar'] = 'tentang.jpg';
        return view('public.tentang-kami.history', $data);
    }

    public function visiMisi()
    {
        $data['title'] = 'Visi & Misi';
        $data['gambar'] = 'tentang.jpg';
        return view('public.tentang-kami.visi-misi', $data);
    }

    public function profileFounder()
    {
        $data['title'] = 'Struktur Organisasi';
        // $data['title'] = 'Profil Pendiri';
        $data['gambar'] = 'tentang.jpg';
        return view('public.tentang-kami.profile-founder', $data);
    }

    public function program()
    {
        $data['title'] = 'Program Kami';
        $data['gambar'] = 'program.jpg';
        return view('public.program.index', $data);
    }

    public function petaDampak()
    {
        $data['title'] = 'Peta Dampak';
        $data['gambar'] = 'program.jpg';
        return view('public.program.peta-dampak', $data);
    }

    public function relawan()
    {
        $data['title'] = 'Relawan';
        $data['gambar'] = 'relawan.jpg';
        return view('public.relawan.index', $data);
    }

    public function daftarRelawan()
    {
        $data['title'] = 'Daftar Relawan';
        $data['gambar'] = 'relawan.jpg';
        $data['relawan'] = Relawan::where('role','Relawan')->get();
        return view('public.relawan.daftar', $data);
    }

    public function registrasi()
    {
        $data['title'] = 'Registrasi';
        $data['gambar'] = 'relawan.jpg';
        return view('public.relawan.registrasi', $data);
    }

    public function partner()
    {
        $data['title'] = 'Partner';
        $data['gambar'] = 'partner.jpg';
        return view('public.partner.index', $data);
    }

    public function logoPTCSR()
    {
        $data['title'] = 'Daftar Donatur (Badan)';
           $data['gambar'] = 'partner.jpg';
        return view('public.partner.logo-pt-csr', $data);
    }

    public function daftarDonatur()
    {
        $data['title'] = 'Daftar Donatur (Perorangan)';
        $data['gambar'] = 'partner.jpg';
        $data['donatur'] = Relawan::where('role','donatur')->get();
        return view('public.partner.daftar-donatur', $data);
    }

    public function countDana()
    {
        $data['title'] = 'Penghitungan Dana';
        $data['gambar'] = 'partner.jpg';
        return view('public.partner.count-dana', $data);
    }

    public function hubungiKami()
    {
        $data['title'] = 'Hubungi Kami';
        $data['gambar'] = 'hubungi.jpg';
        return view('public.hubungi-kami', $data);
    }
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'nik' => 'required|unique:relawans,nik',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:relawans,email',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'no_telpon' => 'required',
            'minat_bakat' => '',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->file('foto')){
            $fotoPath = $request->file('foto');
            $fotoName = $fotoPath->getClientOriginalName();
            $fotoPath->move('img/foto',$fotoPath->getClientOriginalName());
        }else{
            $fotoName  = 'NULL';
        }


        // menyimpan data ke database
        $relawan = new Relawan([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'kewarganegaraan' => $request->input('kewarganegaraan'),
            'agama' => $request->input('agama'),
            'no_telpon' => $request->input('no_telpon'),
            'minat_bakat' => $request->input('minat_bakat'),
            'foto' => $fotoName, // Nama berkas foto yang telah diunggah
            'role' => $request->input('role'),
        ]);

        $relawan->save();

        // redirect ke halaman lain setelah menyimpan data
        if( $request->input('role') == "Relawan"){
            return redirect()
            ->route('dashboard.registrasi')
            ->with('success', 'Data relawan berhasil disimpan.');
        }else  if( $request->input('role') == "Donatur"){
            return redirect()
            ->route('dashboard.registrasi')
            ->with('success', 'Data Donatur berhasil disimpan.');
        }

    }
}
