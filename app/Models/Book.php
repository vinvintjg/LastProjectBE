<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name', 'Price', 'Quantity', 'user_id', 'Image', 'Category',
        // 'Invoice', 'Addres', 'Pos', 'Quantity2',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsToMany(Category::class);
    }


}



