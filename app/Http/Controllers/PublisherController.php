<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{

    public function showPublisher($id){
        // $book = DB::table('books')->where('id', $id)->get();
        $publisher = Publisher::find($id);
        // return "Hello";
        return view ('publisher', ['publisher' => $publisher]);
    }


}
