<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidat;

class CandidatController extends Controller
{
    public function newCandidat(Request $request){
    	$Candidat = new Candidat();
    	//$Candidat->id = 1;
    	$Candidat->nom = $request->input("nom");
    	$Candidat->prenom =  $request->input("nom");
    	$Candidat->email =  $request->input("nom");
    	$Candidat->password =  $request->input("nom");
    	$Candidat->save();    }
         public function newFichep(Request $request){
        $Fichep = new Fichep();
        //$Candidat->id = 1;
        $Candidat->nom = $request->input("nom");
        $Candidat->prenom =  $request->input("nom");
        $Candidat->email =  $request->input("nom");
        $Candidat->password =  $request->input("nom");
        $Candidat->save();    }

public function listCandidats(){
	$candidats = Candidat::all();
	dd($contacts);
}
}
