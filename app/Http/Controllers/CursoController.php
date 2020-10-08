<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function listacursos()
    {
        $cursos=[
            ["id"=>1,"nombre"=>'metematica',"creaditos"=>'3',"precio"=>20],
            ["id"=>2,"nombre"=>'programación',"creaditos"=>'5',"precio"=>40],
            ["id"=>3,"nombre"=>'historia',"creaditos"=>'7',"precio"=>30],
            ["id"=>4,"nombre"=>'metódologia de investigación',"creaditos"=>'8',"precio"=>60],
            ["id"=>5,"nombre"=>'base de datos',"creaditos"=>'8',"precio"=>30],
            ["id"=>6,"nombre"=>'redes I',"creaditos"=>'4',"precio"=>40],
            ["id"=>7,"nombre"=>'Informatica I',"creaditos"=>'5',"precio"=>50],
            ];

            return response()->json($cursos);
    }
}
