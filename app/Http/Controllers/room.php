<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class room extends Controller
{
    public function buscar($id){

    	return $id;

    }

    public function criar(){
    	$token = "vpaas-magic-cookie-2d75c04460b449eda80b9438285a45ac";

    	$sala = time().substr(MD5(time()), 1, 5);
    	return $token."/".$sala;

    }
}
