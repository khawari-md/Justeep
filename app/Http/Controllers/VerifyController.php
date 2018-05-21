<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
	
	public function verify($token)
	{
		$user = User::where('token',$token)->firstOrFail()->$user->update(['token' => null]);


		return redirect()->route('home')->with('success','akun terverifikasi!');
	}
    //
}
