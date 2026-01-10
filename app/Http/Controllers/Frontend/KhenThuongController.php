<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class KhenThuongController extends Controller
{
    public function index()
    {
        $khenThuong = Http::get('http://127.0.0.1:8001/api/v1/khen-thuong')->json();
        return view('admin.khen_thuong.index', ['khenThuong' => $khenThuong]);
    }
}
