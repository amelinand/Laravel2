<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;


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
        return view('add');
    }

    public function book($id)
    {
        $book = Book::find($id);
        return view('book', ['book' => $book ]);
    }

    public function change(Request $request)
    {
        $book = Book::findOrFail($request->id);
        return view('change', ['book' => $book ]);
    }
    
}
