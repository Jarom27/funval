<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        
        $user = DB::select('select * from users where email = ?', [$request->email]);
        $mensaje = [];
        if($user != null && Hash::check($request->pass,$user[0]->password)){
            $mensaje = ["Resultado"=>"Exito","status"=>"verified","code" => 200];
        }
        else{
            $mensaje = ["Resultado"=>"Fallo","status"=>"Not verified", "code" => 400];
        }
        return json_encode($mensaje);
    }
}
