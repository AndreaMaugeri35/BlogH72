<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiSiamoController extends Controller
{
    public $persone=[
        [ "id" => 1 , "name" => "Andrea Maugeri","descrizione" => 'Descrizione','delay'=>'0'],
        [ "id" => 2 , "name" => "Andrea Martina","descrizione" => 'Descrizione','delay'=>'200'],
        [ "id" => 3 , "name" => "Roberto Morreale","descrizione" => 'Descrizione','delay'=>'400'],
        [ "id" => 4 , "name" => "Lucia Pacciolla","descrizione" => 'Descrizione','delay'=>'600']
    ];

    public function chisiamo(){
        return view ('chisiamo.chi-siamo',['persone'=>$this->persone]);
    }

    public function dettagli($id) {
        foreach($this->persone as $persona) {
            if($id == $persona['id']){
                return view('chisiamo.dettagli', ['persona' => $persona]);
            }
        }

    }
}
