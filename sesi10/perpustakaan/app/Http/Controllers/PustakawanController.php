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

    public function store(Request $request)
    {
        $input = [
            'name' => $request->name,
            'address' => $request->address,
            'age' => $request->age,
            'nik' => $request->rating,
        ];

        //menggunkaan model pustakawna uuntuk insertd data
        $book = Pustakawan::create($input);

        $data = [
            'message' => "Book is created succesfully",
            'data' => $book
        ];

        //mengembalikan data json dan kode 201
        return response()->json($data, 201);
    }

    public function show($id)
    {
        $pustakawanDetails = Pustakawan::find($id);

        // jika id tidak ditemukan
        if (!$pustakawanDetails) {
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ], 404);
        }

        //return book return
        return response()->json([
            'message' => 'get detail resource',
            'status' => 200,
            'data' => $pustakawanDetails
        ], 200);
    }

    function update($id, Request $request)
    {
        $pustakawan = Pustakawan::find($id);

        if (!$pustakawan) {
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ], 404);
        }

        $updated = $pustakawan->update([
            'name' => $request->name ?? $pustakawan->name,
            'address' => $request->address ?? $pustakawan->address,
            'age' => $request->publisher ?? $pustakawan->publisher,
            'nik' => $request->rating ?? $pustakawan->rating,
        ]);

        if ($updated) {
            return response()->json([
                'message' => 'Data updated successfully',
                'data' => $updated,
                'status' => 200
            ], 200);
        }
    }
}
