<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_keep extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'library_id', 'status', 'return_dt'];
}
