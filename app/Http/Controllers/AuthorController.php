<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::with('books')->get();
        return response()->json($authors);
    }

    public function show($id)
    {
        $author = Author::with('books')->find($id);
        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }
        return response()->json($author);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'bio' => 'nullable|string',
        ]);

        $author = Author::create($validated);
        return response()->json(['message' => 'Author created successfully', 'data' => $author], 201);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'string',
            'bio' => 'nullable|string',
        ]);

        $author->update($validated);
        return response()->json(['message' => 'Author updated successfully', 'data' => $author]);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $author->delete();
        return response()->json(['message' => 'Author deleted successfully']);
    }
}
