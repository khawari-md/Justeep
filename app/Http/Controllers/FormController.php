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
    	$data->pelaku_id = '2'; //belom ada session
    	$data->onr_foto = $request->onr_foto;
    	$data->save();

    	return redirect()->action('PagesController@getSubmit');
    }

    public function show()
    {
    	$data = onr::all();
    	return view('pages.browse',['data' => $data]);
    }

    public function showof()
    {
    	$data = onr::all();
    	return view('pages.itemof',['data' => $data]);
    }
    
    public function showreq()
    {
    	$data = onr::all();
    	return view('pages.itemreq',['data' => $data]);
    }
}
