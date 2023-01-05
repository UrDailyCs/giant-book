<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function showCategory($id){
        $category = Category::find($id);
        // return "Hello";
        return view ('category', ['category' => $category]);
    }
}
