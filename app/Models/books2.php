<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books2 extends Model
{
    use HasFactory;

    protected $table = "books2";

    protected $fillable = [
        'Pooklo', 'Pasolo',
     ];
}

