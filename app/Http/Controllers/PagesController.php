<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function getIndex () {
    	return view('pages.index');
    }

    public function getBrowse () {
    	return view('pages.browse', ['id' => $id]
    );
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
    	return view('pages.profile', ['user' => $user]);
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

    public function getKota () {
        return view('pages.kota');
    }
}
