<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    // public function create() {
    //     return view('add');
    // }
    public function store(Request $request) {
    $book = new Book;
    $book->title = $request->title;
    $book->author_id = $request->author_id;
    $book->publication_year = $request->publication_year;
    $book->synopsis = $request->synopsis;
    $book->save();
    $book->genres()->attach($request->genres);

    

    return redirect('/books');
    // redirect()->back()->with('success_message','any message you want');
    }

    public function deleteBook(Request $request) {
        $book = Book::find($request->id);
        $book->genres()->detach();
        $book->delete();

        return redirect('/books');
    }

    public function change(Request $request) {
        $book = Book::findOrFail($request->id); 
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->publication_year = $request->publication_year;
        $book->synopsis = $request->synopsis;
        // $book->genres()->detach();
        // $book->genres()->attach($request->genres);
        $book->genres()->sync($request->genres);
        $book->save();
    
        
    
        return redirect('/books');
    }
}
