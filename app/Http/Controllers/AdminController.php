<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Relawan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';
        $data['relawans'] = Relawan::get();
        return view('admin.pages.dashboard.index', $data);
    }
}
