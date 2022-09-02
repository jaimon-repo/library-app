<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library_list extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'added_by', 'book_collection'];
}
