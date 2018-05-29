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
    	$id = Auth::id();

    	$data->user_id = $id;
    	$data->user_nama = $request->user_nama;
    	$data->alamat = $request->alamat;
    	$data->aboutme = $request->aboutme;

    	User::find($id)->update($data);

    	return redirect()->action('PagesController@getSubmit');
    }
}
