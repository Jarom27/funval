<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        return json_encode(["texto" =>"Hola"]);
    }

    public function ShowStudent()
    {
        $students = Student::all();
        return json_encode($students);
    }
    
    public function ShowByMatricula($matricula)
    {
        $student = Student::where("matricula",$matricula)->get();
        $service_hours = DB::select('select al.id, al.matricula, al.pais, als.nivel, als.cantidad, s.nombre from alumnos al LEFT JOIN alumno_servicios als ON al.id = als.alumno_id RIGHT JOIN servicios s ON als.servicio_id = s.id WHERE al.id = ?',[$student[0]->id]);
        return json_encode($service_hours);
    }

    
    public function ShowByMatricula_level($matricula,$nivel)
    {
        $student = Student::where("matricula",$matricula)->get();
        $service_hours = DB::select('select al.id, al.matricula, al.pais, als.nivel, als.cantidad, s.nombre from alumnos al LEFT JOIN alumno_servicios als ON al.id = als.alumno_id RIGHT JOIN servicios s ON als.servicio_id = s.id WHERE al.id = ? AND als.nivel = ?',[$student[0]->id, $nivel]);
        return json_encode($service_hours);
    }

    public function ShowByMatricula_level_id($matricula,$nivel,$id)
    {
        $student = Student::where("matricula",$matricula)->get();
        $service_hours = DB::select('select al.id, al.matricula, al.pais, als.nivel, als.cantidad, s.nombre from alumnos al LEFT JOIN alumno_servicios als ON al.id = als.alumno_id RIGHT JOIN servicios s ON als.servicio_id = s.id WHERE al.id = ? AND als.nivel = ?',[$student[0]->id, $nivel]);
        try {
            return json_encode($service_hours[$id]);
        } catch (\Throwable $th) {
            echo "No existe tal registro";
        }
        
    }
    public function add_Service_Hour(Request $request){
        $student = Student::where("matricula",$request->matricula)->get();
        $servicio = Servicio::where("nombre",$request->servicio)->get();
        DB::insert("INSERT INTO alumno_servicios(nivel,cantidad,alumno_id,servicio_id) VALUES(?,?,?,?)",[$request->nivel,$request->cantidad,$student[0]->id,$servicio[0]->id]);
        
        return json_encode(["Resultado"=>"Exito"]);
    }


}
