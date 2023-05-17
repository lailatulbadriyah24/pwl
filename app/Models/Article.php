<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'penulis',
        'content',
        'featured_image',
        'kategori',
        'tahun_terbit'
    ];
}
