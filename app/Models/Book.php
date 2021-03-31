<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'tb_book';
    protected $fillable = [
        'name',
        'qty',
        'judul',
        'desc',
    ];
}
