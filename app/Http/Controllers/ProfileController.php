<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{

    public function __construct() {
      $this->middleware('auth');
    }

    public function edit(User $user) {
      $user = Auth::user();
      return view('profiles.edit', compact('user'));
    }

    public function update(User $user, Request $request) {

      $user->user_nama = $request->user_nama;
    	$user->alamat = $request->alamat;
      $user->no_telp = $request->no_telp;
    	$user->aboutme = $request->aboutme;
    // 	$user = array(
		  // 'user_nama' = $request->user_nama;
    // 	'alamat' = $request->alamat;
    // 	'aboutme' = $request->aboutme;
    // 	)

    	// dd($user);

    	$user->save();

    	return redirect()->action('PagesController@getProfile');
    }
}
