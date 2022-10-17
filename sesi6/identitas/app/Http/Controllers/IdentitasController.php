<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    function index()
    {
        $data = [
            "name" => "Nisa",
            "gender" => "P",
            "address" => "Jl.Raya Tajur,Bogor",
            "is_student" => true,
        ];

        return response()->json($data);
    }
}
//http://127.0.0.1:8000/api/
