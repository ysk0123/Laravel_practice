<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {
        $books = Book::with('author')->get();
        return view('books.index', compact('books'));
    }
    public function create()
    {
        $authors = User::pluck('name','id');
        return view('books.create', compact('authors'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author_id' => 'required|exists:users,id',
            'comment' => 'required',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success','Book created successfully.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
    public function edit(Book $book)
    {
        $authors = User::pluck('name','id');
        return view('books.edit', compact('book','authors'));
    }
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author_id' => 'required|exists:users,id',
            'comment' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('books.show', $book->id)->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        // $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }




}
