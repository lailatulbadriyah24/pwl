<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah2 extends Model
{
    use HasFactory;
    protected $table = 'mata_kuliah';
    // protected $primarykey = 'id';
    // protected $keyType = 'int';

    protected $fillable = [
        'nama',
        'semester',
        'sks',
        'dosen',
    ];
}
