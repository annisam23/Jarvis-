<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    function index()
    {
        //get all data in books
        $buku = Books::all();

        //send 201 if books table
        if (count($buku) == 0) {
            return response()->json([
                'message' => 'Get all resources',
                'data' => $buku,
            ], 204);
        }


        return response()->json([
            'message' => 'Get all resources',
            'data' => $buku,
        ]);
    }
}
