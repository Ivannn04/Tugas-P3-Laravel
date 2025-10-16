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

    /**
     * Tampilkan detail author berdasarkan ID.
     */
    public function show($id)
    {
        $author = Author::with('books')->find($id);

        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        return response()->json($author);
    }

    /**
     * Tambahkan author baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|url', // bisa berupa URL
            'bio' => 'nullable|string',
        ]);

        $author = Author::create($validated);

        return response()->json([
            'message' => 'Author created successfully',
            'data' => $author,
        ], 201);
    }

    /**
     * Update data author berdasarkan ID.
     */
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'photo' => 'nullable|url',
            'bio' => 'nullable|string',
        ]);

        $author->update($validated);

        return response()->json([
            'message' => 'Author updated successfully',
            'data' => $author,
        ]);
    }

    /**
     * Hapus data author berdasarkan ID.
     */
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
