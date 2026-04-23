<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // Tambahkan ini agar data bisa masuk ke database
    protected $fillable = ['name', 'category', 'price', 'description', 'image'];
}