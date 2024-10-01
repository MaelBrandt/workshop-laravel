<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    /*
        // Return all books
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    */

        // return only the 5 most recently added books
        $books = \App\Models\Book::latest()->paginate(5);
        return view('books.index', compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:25',
            'author' => 'required|min:3|max:50',
            'pages' => 'required|integer|gt:0|lt:1000',
            'quantity' => 'required|integer|gte:0|lt:100',
         ]);
        \App\Models\Book::create($request->all());

        return redirect()->route('books.index')->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = \App\Models\Book::findOrFail($id);
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = \App\Models\Book::where('id', $id)->firstOrFail();
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        \App\Models\Book::findOrFail($id)->update($request->all());
        return redirect()->route('books.index')->with('success','Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = \App\Models\Book::find($id);
        $book->delete();

        return redirect()->route('books.index')->with('success','Book deleted successfully.');
    }
}
