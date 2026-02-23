<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class HallController extends Controller
{
public function index()
{
    $title = 'Hall';
    $books = Book::with(['author', 'category'])->get();

    // return dd($books); 
    return view('hall', compact('title', 'books'));
    }

public function singleBook(Book $book)
    {
        $title = $book->name;
        return dd($book);
    }

    public function hallAuthor(Author $author)
    {
        $title = 'Books by ' . $author->name;
        $books = Book::where('author_id', $author->id)->get();
        return view('hall', compact('title', 'books'));
    }

    public function singleAuthor($slug)
    {
        $title = 'Books of ' . $category->name;
        $books = Book::where('category_id', $category->id)->get();
        return view('hall', compact('books', 'title'));
    }
}    
