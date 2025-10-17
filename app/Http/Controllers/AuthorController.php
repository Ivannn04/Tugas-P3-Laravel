<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Tampilkan semua author beserta buku mereka.
     */
    public function index()
    {
        $authors = Author::with('books')->get();
        return response()->json($authors);
    }

}
