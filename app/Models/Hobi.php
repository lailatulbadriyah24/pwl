<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;
    protected $table = 'hobi';
    // protected $primarykey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'nama'
    ];
}
