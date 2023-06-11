<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

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

    // 論理削除
    // use SoftDeletes;
    // const DELETE_AT = 'status';
    // protected $dates = ['status'];

}
