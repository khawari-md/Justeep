<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\onr;
use App\transaksi;

class FormController extends Controller
{

    public function store(Request $request) {
    	$data = new onr;
    	$user = Auth::user()->user_id;

    	$data->nama_barang = $request->nama_barang;
    	$data->kategori = $request->kategori;
    	$data->deskripsi = $request->deskripsi;
    	$data->harga = $request->harga;
    	$data->jumlah = $request->jumlah;
    	$data->waktu = $request->waktu;
    	$data->kota_barang = $request->kota_barang;
    	$data->kota_onr = $request->kota_onr;
    	$data->onr = $request->onr;
    	$data->pelaku_id = $user;
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

    public function showcart(onr $id)
    {
        return view('pages.cart',['bodoamat' => $id]);
    }

    public function transaksi(Request $request)
    {

        $juml = $request->jumlah;
        $id = $request->onrid;
        
        // $jmlonr = DB::select(DB::raw("SELECT jumlah FROM onrs WHERE onrs.onr_id = '$id'"));
        // dd($jmlonr);
        $jmlonr = onr::where('onr_id', $id)->pluck('jumlah');
        // dd($jmlonr[0]);
        

        if ($juml < $jmlonr[0]) {
        DB::select(DB::raw("UPDATE onrs o SET o.jumlah = o.jumlah-'$juml' WHERE o.onr_id = '$id'"));

        DB::select(DB::raw("UPDATE transaksis t, onrs o SET t.total_harga = '$juml'*o.harga WHERE o.onr_id = '$id'"));
        $total = DB::select(DB::raw("SELECT t.total_harga FROM transaksis t, onrs o WHERE o.onr_id = '$id'"));
        // dd($total[0]->total_harga);

        return view('pages.rating', ['total' => $total[0]->total_harga]);   
        }

        else {
            return redirect()->back()->with('alert','Stok barang tidak cukup!');
        }
    }
}
