<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function getIndex () {
    	return view('pages.index');
    }

    public function getBrowse () {
    	return view('pages.browse', ['id' => $id]);
    }

    public function getItemOf () {
    	return view('pages.itemof');
    }

    public function getItemReq () {
    	return view('pages.itemreq');
    }

    public function getLogin () {
    	return view('pages.login');
    }

    public function getProfile () {
        $user = Auth::user();
        $coffer = "jumlah_itemOffer('$user->user_id')";
        $creq = "jumlah_itemRequest('$user->user_id')";
        $cmak = "jumlah_itemMakanan('$user->user_id')";
        $ctas = "jumlah_itemTaksesoris('$user->user_id')";
        $cian = "jumlah_itemIbuanak('$user->user_id')";
        $cgam = "jumlah_itemGames('$user->user_id')";

    //     $offer = DB::select(DB::raw("SELECT COUNT(onrs.onr_id) 
    // FROM onrs INNER JOIN users ON users.user_id=onrs.pelaku_id
    // WHERE onrs.onr = 'OFFER'
    // AND users.user_id = '$user->user_id'"));
        $offer = DB::select(DB::raw("SELECT DISTINCT jumlah_itemOffer('$user->user_id') FROM users u, onrs"));
    //     $request = DB::select(DB::raw("SELECT COUNT(onrs.onr_id) 
    // FROM onrs INNER JOIN users ON users.user_id=onrs.pelaku_id
    // WHERE onrs.onr = 'REQUEST'
    // AND users.user_id = '$user->user_id'"));
        $request = DB::select(DB::raw("SELECT DISTINCT jumlah_itemRequest('$user->user_id') FROM users u, onrs"));
    //     $makan = DB::select(DB::raw("SELECT COUNT(onrs.onr_id) 
    // FROM onrs INNER JOIN users ON users.user_id=onrs.pelaku_id
    // WHERE onrs.kategori = '1'
    // AND users.user_id = '$user->user_id'"));
        $makan = DB::select(DB::raw("SELECT DISTINCT jumlah_itemMakanan('$user->user_id') FROM users u, onrs"));
    //     $taksesoris = DB::select(DB::raw("SELECT COUNT(onrs.onr_id) 
    // FROM onrs INNER JOIN users ON users.user_id=onrs.pelaku_id
    // WHERE onrs.kategori = '2'
    // AND users.user_id = '$user->user_id'"));
        $taksesoris = DB::select(DB::raw("SELECT DISTINCT jumlah_itemTaksesoris('$user->user_id') FROM users u, onrs"));
    //     $ibuanak = DB::select(DB::raw("SELECT COUNT(onrs.onr_id) 
    // FROM onrs INNER JOIN users ON users.user_id=onrs.pelaku_id
    // WHERE onrs.kategori = '3'
    // AND users.user_id = '$user->user_id'"));
        $ibuanak = DB::select(DB::raw("SELECT DISTINCT jumlah_itemIbuanak('$user->user_id') FROM users u, onrs"));
    //     $games = DB::select(DB::raw("SELECT COUNT(onrs.onr_id) 
    // FROM onrs INNER JOIN users ON users.user_id=onrs.pelaku_id
    // WHERE onrs.kategori = '4'
    // AND users.user_id = '$user->user_id'"));
        $games = DB::select(DB::raw("SELECT DISTINCT jumlah_itemGames('$user->user_id') FROM users u, onrs"));

        // dd($offer[0]->$coffer);
    	return view('pages.profile', ['user' => $user, 'offer' => $offer[0]->$coffer, 'request' => $request[0]->$creq, 'makan' => $makan[0]->$cmak, 'taksesoris' => $taksesoris[0]->$ctas, 'ibuanak' => $ibuanak[0]->$cian, 'games' => $games[0]->$cgam]);
    }

   	public function getSubmit () {
        $user = Auth::user();
   		return view('pages.submit', ['user' => $user]);
   	}

    public function getUpdateProf() {
        $user = Auth::user();
        return view('pages.updateprof', ['user' => $user]);
    }

    public function getCart() {
        $user = Auth::user();
        return view('pages.cart', ['user' => $user]);
    }

    public function getKategori () {
        return view('pages.kategori');
    }
}
