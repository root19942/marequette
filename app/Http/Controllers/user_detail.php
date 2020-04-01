<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class user_detail extends Controller
{
    //

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.user_detail');
    }

    public function update (Request $request){


		$user = User::find(Auth::user()->id);
	    $user->name = ( $request->input('name')!= null )? $request->input('name'):$user->name;
	    $user->genre = ( $request->input('genre')!= null )? $request->input('genre'):$user->genre;
	    $user->subname = ( $request->input('subname')!= null )? $request->input('subname'):$user->subname;
	    $user->etablisement = ( $request->input('etablisement')!= null )? $request->input('etablisement'):$user->etablisement;
	    $user->faculte = ( $request->input('faculte')!= null )? $request->input('faculte'):$user->faculte;
	    $user->filiere = ( $request->input('filiere')!= null )? $request->input('filiere'):$user->filiere;
	    $user->niveau = ( $request->input('niveau')!= null )? $request->input('niveau'):$user->niveau;
	    $user->telephone = ( $request->input('telephone')!= null )? $request->input('telephone'):$user->telephone;
	    $user->email = ( $request->input('email')!= null )? $request->input('email'):$user->email;

    	if (!empty(request()->doc1)) {

    		$path = public_path('documents/'.$user->matricule);

		    if(!File::isDirectory($path)){

		        File::makeDirectory($path, 0777, true, true);

		    }


			$request->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',]);

	        $imageName = 'document_1'.'.'.$request->doc1->getClientOriginalExtension();

	        $request->doc1->move(public_path('/documents/'.$user->matricule), $imageName);
	    	$user->fichiers = $user->fichiers.$imageName.';';
    	}
    	if (!empty($request->doc2)) {

    		$path = public_path('documents/'.$user->matricule);

		    if(!File::isDirectory($path)){

		        File::makeDirectory($path, 0777, true, true);

		    }


			$reques->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',]);

	        $imageName = 'document_2'.'.'.$reques->doc2->getClientOriginalExtension();

	        $reques->doc2->move(public_path('/documents/'.$user->matricule), $imageName);
	    	$user->fichiers = $user->fichiers.$imageName.';';
    	}
    	if (!empty($reques->doc3)) {

    		$path = public_path('documents/'.$user->matricule);

		    if(!File::isDirectory($path)){

		        File::makeDirectory($path, 0777, true, true);

		    }


			$reques->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',]);

	        $imageName = 'document_3'.'.'.$reques->doc3->getClientOriginalExtension();

	        $reques->doc3->move(public_path('/documents/'.$user->matricule), $imageName);
	    	$user->fichiers = $user->fichiers.$imageName.';';
    	}
    	if (!empty($reques->doc4)) {

    		$path = public_path('documents/'.$user->matricule);

		    if(!File::isDirectory($path)){

		        File::makeDirectory($path, 0777, true, true);

		    }


			$reques->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',]);

	        $imageName = 'document_4'.'.'.$reques->doc4->getClientOriginalExtension();

	        $reques->doc4->move(public_path('/documents/'.$user->matricule), $imageName);
	    	$user->fichiers = $user->fichiers.$imageName.';';
    	}


		return $user->save();




	}
}
