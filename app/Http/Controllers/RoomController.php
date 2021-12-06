<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\room;

class RoomController extends Controller
{


    public function buscar($id){

    	$sala = room::find($id);

    	if($sala){
    		$token = "vpaas-magic-cookie-2d75c04460b449eda80b9438285a45ac";
    		return json_encode(["status"=>"success", "sala"=>$token."/".$sala->token]);
    	}else{
    		return json_encode(["status"=>"error", "message"=>"Sala não encontrada!"]);
    	}

    }

    public function getsessao($token){
    	$sala = room::where("token", "=", $token)->count();
    	
    	if($sala > 0){
    		$token_principal = "vpaas-magic-cookie-2d75c04460b449eda80b9438285a45ac";
    		return view("room", ["sala"=>$token_principal."/".$token]);
    	}
    	else
    		return view("room", ["sala"=>""]);
    }

    public function validar($token){

    	$sala = room::where("token", "=", $token)->count();
    	

    	if($sala > 0){
    		$token_principal = "vpaas-magic-cookie-2d75c04460b449eda80b9438285a45ac";
    		return json_encode(["status"=>"success", "sala"=> url('/')."/".$token_principal."/".$token]);
    	}else{
    		return json_encode(["status"=>"error", "message"=>"Sala não encontrada!"]);
    	}

    }



    public function index(){
    	$sala = room::all();

    	return view('welcome', ["salas"=>$sala]);
    }



    public function criar(Request $request){
    	$token = "vpaas-magic-cookie-2d75c04460b449eda80b9438285a45ac";
    	$token2 = time().substr(MD5(time()), 1, 5);

    	$url = url('/');
    	$sala = new room();

    	$sala->proprietario = "Dev";
    	$sala->nome = $request->nome_sala;
    	$sala->token = $token2;
    	$sala->status = "A";

    	$sala->save();

    	
    	return $url."/sessao/".$token2;

    	

    }
}
