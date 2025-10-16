<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return response()->json($books);
    }

    public function show($id)
    {
        $book = Book::with('author')->find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'author_id' => 'required|exists:authors,id',
            'published_year' => 'nullable|integer',
        ]);

        $book = Book::create($validated);
        return response()->json(['message' => 'Book created successfully', 'data' => $book], 201);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'string',
            'author_id' => 'exists:authors,id',
            'published_year' => 'integer|nullable',
        ]);

        $book->update($validated);
        return response()->json(['message' => 'Book updated successfully', 'data' => $book]);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Book deleted successfully']);
    }
}
