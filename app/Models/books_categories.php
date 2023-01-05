<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books_categories extends Model
{
    protected $table = 'book_categories';
    // public function category(){
    //     return $this->belongsTo(Category::class, 'category_id');
    // }
    // public function book(){
    //     return $this->belongsTo(Book::class, 'book_id');
    // }
}
