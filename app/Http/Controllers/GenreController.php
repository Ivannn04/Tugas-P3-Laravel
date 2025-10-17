<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // GET /api/genres
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

}
