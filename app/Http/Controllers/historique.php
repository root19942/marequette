<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requete;
use Illuminate\Support\Facades\Auth;
class historique extends Controller
{
    //

    public function index(){
		$requetes = Requete::where('user', '=', Auth::user()->id)->get();
		return view('pages.historique')->withRequetes($requetes);
	}
}
