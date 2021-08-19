<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;


class WelcomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function books()
    {
        $books = Book::all();
        return view('books', ['allthebooks' => $books ]);
    }

    public function add()
    {
        $authors = Author::all()->sortBy('name');
        $genres = Genre::all()->sortBy('name');
        return view('add', ['authors' => $authors, 'genres' => $genres]);
    }

    public function book($id)
    {
        $book = Book::find($id);
        return view('book', ['book' => $book ]);
    }

    public function change(Request $request)
    {

        $book = Book::findOrFail($request->id);
        $authors = Author::all()->sortBy('name');
        $genres = Genre::all()->sortBy('name');
        return view('change', ['book' => $book ,'authors' => $authors, 'genres' => $genres]);
    }
    
}
