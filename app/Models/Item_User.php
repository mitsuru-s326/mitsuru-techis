<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_User extends Model
{
    use HasFactory;
    protected $table='Item_User';

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function items(){
        return $this->belongsToMany(Item::class);
    }
}
