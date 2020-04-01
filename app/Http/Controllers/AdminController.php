<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'content' => 'This is Dashboard'
        ];

        return view('admin/content', $data);
    }

    public function dataBarang()
    {
        $data = [
            'title' => 'Data Barang',
            'content' => 'This is Data Barang'
        ];

        return view('admin/data_barang', $data);
    }
}
