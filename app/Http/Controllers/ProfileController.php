<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{
    public function update(Request $request) {

    	// $data->user_nama = $request->user_nama;
    	// $data->alamat = $request->alamat;
    	// $data->aboutme = $request->aboutme;
    	$data = array(
		'user_nama' = $request->user_nama;
    	'alamat' = $request->alamat;
    	'aboutme' = $request->aboutme;
    	)

    	dd($data);

    	User::find($id)->update($data);

    	return redirect()->action('PagesController@getSubmit');
    }
}
