<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\onr;

class FormController extends Controller
{

    public function store(Request $request) {
    	$data = new onr;

    	$data->nama_barang = $request->nama_barang;
    	$data->kategori = $request->kategori;
    	$data->deskripsi = $request->deskripsi;
    	$data->harga = $request->harga;
    	$data->jumlah = $request->jumlah;
    	$data->waktu = $request->waktu;
    	$data->kota_barang = $request->kota_barang;
    	$data->kota_onr = $request->kota_onr;
    	$data->onr = $request->onr;

    	$data->save();
    }
}