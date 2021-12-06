<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\room;

class RoomController extends Controller
{
    public function buscar($id){

    	return $id;

    }

    public function index(){
    	$sala = room::all();

    	return view('welcome', ["salas"=>$sala]);
    }

    public function criar(){
    	$token = "vpaas-magic-cookie-2d75c04460b449eda80b9438285a45ac";
    	$token2 = time().substr(MD5(time()), 1, 5);


    	$sala = new room();

    	$sala->proprietario = "Dev";
    	$sala->nome = "Teste Room Dev";
    	$sala->token = $token2;
    	$sala->status = "A";

    	$sala->save();

    	
    	return $token2;

    	

    }
}
