<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Tampilkan semua buku dengan relasi author dan genre.
     */
    public function index()
    {
        $books = Book::with(['author', 'genre'])->get();
        return response()->json($books);
    }

}
