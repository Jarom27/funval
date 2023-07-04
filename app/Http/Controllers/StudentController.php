<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        return json_encode(["texto" =>"Hola"]);
    }

    public function ShowStudent()
    {
        return json_encode(["texto" =>"muestra todos los alumnos"]);
    }
    
    public function ShowByMatricula()
    {
        return json_encode(["texto" =>"show by matricula"]);
    }

    
    public function ShowByMatricula_level()
    {
        return json_encode(["texto" =>"show by matricula y nivel"]);
    }

    
    public function ShowByMatricula_level_id()
    {
        return json_encode(["texto" =>"show by matricula añadiendo nivel y ID"]);
    }


}
