<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;


class GenerasiCerdasController extends Controller
{
    public function beranda()
    {
        $data['title'] = 'Beranda';
        return view('public.beranda', $data);
    }

    public function tentangKami()
    {
        $data['title'] = 'Tentang Kami';
        return view('public.tentang-kami.index', $data);
    }

    public function history()
    {
        $data['title'] = 'Sejarah';
        return view('public.tentang-kami.history', $data);
    }

    public function visiMisi()
    {
        $data['title'] = 'Visi & Misi';
        return view('public.tentang-kami.visi-misi', $data);
    }

    public function profileFounder()
    {
        $data['title'] = 'Profil Pendiri';
        return view('public.tentang-kami.profile-founder', $data);
    }

    public function program()
    {
        $data['title'] = 'Program Kami';
        return view('public.program.index', $data);
    }

    public function petaDampak()
    {
        $data['title'] = 'Peta Dampak';
        return view('public.program.peta-dampak', $data);
    }

    public function relawan()
    {
        $data['title'] = 'Relawan';
        return view('public.relawan.index', $data);
    }

    public function daftarRelawan()
    {
        $data['title'] = 'Daftar Relawan';
        return view('public.relawan.daftar', $data);
    }

    public function registrasi()
    {
        $data['title'] = 'Registrasi';
        return view('public.relawan.registrasi', $data);
    }

    public function partner()
    {
        $data['title'] = 'Partner';
        return view('public.partner.index', $data);
    }

    public function logoPTCSR()
    {
        $data['title'] = 'Logo PT CSR';
        return view('public.partner.logo-pt-csr', $data);
    }

    public function daftarDonatur()
    {
        $data['title'] = 'Daftar Donatur';
        return view('public.partner.daftar-donatur', $data);
    }

    public function countDana()
    {
        $data['title'] = 'Penghitungan Dana';
        return view('public.partner.count-dana', $data);
    }

    public function hubungiKami()
    {
        $data['title'] = 'Hubungi Kami';
        return view('public.hubungi-kami', $data);
    }
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'nik' => 'required|unique:relawans',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:relawans',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        // menyimpan data ke database
        Relawan::create($request->all());

        // redirect ke halaman lain setelah menyimpan data
        return redirect()->route('dashboard.registrasi')->with('success', 'Data relawan berhasil disimpan.');

    }
}
