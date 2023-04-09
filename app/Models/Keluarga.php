<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;
    protected $table = 'keluarga';
    // protected $primarykey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'nama',
        'hubungan',
        'tanggal_lahir',
        'jenis_kelamin',
        'pekerjaan',
        'alamat'
    ];
}
