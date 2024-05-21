<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        //dsfadsfasdf
        $book = Book::get();
        return $book;
    }

    public function store(Request $request)
    {
      $request->validate([
            'title' => 'required',
            'author_id' => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
            'genre_id' => 'required|exists:genres,id',

      ]);
//
        $book = Book::create($request->all());
        return response()->json([
            'message' => 'Book created Successfully',
            'data' => $book
        ]);

    }
}
