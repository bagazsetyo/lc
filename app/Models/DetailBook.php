<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBook extends Model
{
    use HasFactory;
    protected $table = 'tb_book_details';
    protected $fillable = [
        'book_id',
        'user_id',
    ];
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id','id');
    }
}
