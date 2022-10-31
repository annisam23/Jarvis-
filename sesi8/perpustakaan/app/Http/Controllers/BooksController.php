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

    public function store(Request $request)
    {
        $input = [
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'rating' => $request->rating,
            'published_date' => $request->published_date,
        ];

        //menggunkaan model Books uuntuk insertd data
        $book = Books::create($input);

        $data = [
            'message' => "Book is created succesfully",
            'data' => $book,
        ];

        //mengembalikan data json dan kode 201
        return response()->json($data, 201);
    }

    public function show($id)
    {
        $book = Books::find($id);

        // jika id tidak ditemukan
        if (!$book) {
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ], 404);
        }

        //return book return
        return response()->json([
            'message' => 'get detail resource',
            'status' => 200,
            'data' => $book
        ], 200);
    }
}
