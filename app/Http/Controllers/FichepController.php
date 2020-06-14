<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fichep;
class FichepController extends Controller
{
     public function newFicheP(){
    	$newFicheP = new Fichep();
    	$newFicheP->id = 1;
    	$newFicheP->nom = "kebdani";
    	$newFicheP->prenom = "fatma";
    	$newFicheP->date_naissance = "1995-07-17";
    	$newFicheP->adresse = "123";
    	$newFicheP->num_tel=2355;
    	$newFicheP->diplomes = "master info";
    $newFicheP->competences = "dev";
    $newFicheP->experiences = "rien";
    
    	$newFicheP->save();    }

public function listficheP(){
	$ficheps = Fichep::all();
	dd($ficheps);
}
}
