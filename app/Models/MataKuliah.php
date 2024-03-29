<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    // protected $primarykey = 'id';
    // protected $keyType = 'int';
    public function mahasiswas(){
        return $this->belongsToMany(MahasiswaModel::class, 'mahasiswa_matakuliah','matakuliah_id','mahasiswa_id')->withPivot('nilai');
    }

    protected $fillable = [
        'nama',
        'semester',
        'sks',
        'dosen',
    ];
}
