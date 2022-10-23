<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index()
    {
        $pustakawan = Pustakawan::all();

        return response()->json([
            'message' => 'Get all resources',
            'status code' => true,
            'data' => $pustakawan,
        ], 200);
    }
}
