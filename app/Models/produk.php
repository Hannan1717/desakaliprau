<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class produk extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama', 'deskripsi', 'seller', 'harga', 'url', 'image', 'slug'
    ];

    protected $hidden = [];
}
