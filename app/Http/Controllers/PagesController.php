<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getIndex () {
    	return view('pages.index');
    }

    public function getBrowse () {
    	return view('pages.browse');
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
}
