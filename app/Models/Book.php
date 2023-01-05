<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }
    // public function books_categories(){
    //     return $this->hasMany(books_categories::class);
    // }
    public function category(){
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
}
