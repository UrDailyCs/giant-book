<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // public function books_categories(){
    //     return $this->hasMany(books_categories::class);

    // }
    public function book(){
        return $this->belongsToMany(Book::class, 'book_category', 'category_id', 'book_id');
    }
}
