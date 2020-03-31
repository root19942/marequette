<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
class destinationCtrl extends Controller
{
    //

    public function getFiliere($destination)
    {
        $obj_destination = Destination::find($destination);
        $etablissement = DB::select('select * from etablissements where id = ?', [$obj_destination->etablisement]); 
        $filieres = explode(';',$etablissement);
        return response()->json(['filieres' =>$filieres], 200);
    }
}
