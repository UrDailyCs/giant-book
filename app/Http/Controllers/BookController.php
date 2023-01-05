<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\books_categories;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $book = DB::table('books')->get();

        return view('index', ['books' => $book]);
    }

    public function showBookDetails($id){
        $book = Book::find($id);
        return view ('bookdetail', ['book' => $book]);
    }

    public function showBooksPublisher($id){
        $publisher = Publisher::find($id);

        return view ('Publisher', ['publisher' => $publisher]);
    }
}
