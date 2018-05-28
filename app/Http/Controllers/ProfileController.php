<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function store(Request $request) {
    	$data = new onr;

    	$data->user_nama = $request->user_nama;
    	$data->alamat = $request->alamat;
    	$data->aboutme = $request->aboutme;

    	return redirect()->action('PagesController@getSubmit');
    }
}
