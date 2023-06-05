<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'genre',
        'introduction',
        'image',
        'price',
        'inventory',
    ];

    // userの情報を取得する
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
