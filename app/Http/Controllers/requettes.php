<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Requete;
use Illuminate\Support\Facades\Auth;
class requettes extends Controller
{
    //


    public function view()
    {
		if (! Auth::user()->fichiers) {
			return back();
		}
		else{
			return view('pages.add_requete');
		}
    }

    public function getrequette()
    {
		$Lesrequetes = Requete::all();
		$request = array();
		foreach ($Lesrequetes as  $requete) {
			$requete_temp = array('requete' => $requete , 'user' => User::find($requete->user) );
			array_push($request, $requete_temp);
		}
		return response()->json(['requetes' =>$request], 200);
    }

    public function postrequete(Request $request)
    {

	    $requete = new Requete ;
	    $requete->user = Auth::user()->id;
	    $requete->group_td = $request->input('group_td');
	    $requete->destination = $request->input('destination');
	    $requete->objet = $request->input('objet');
	    $requete->message = $request->input('message');	
		return $requete->save();
    }
}
