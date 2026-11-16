<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id_mk';
    public $timestamps = false;
    protected $fillable = ['kode_mk', 'nama_mk', 'sks'];

    public function Mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class, 'krs', 'id_mk', 'Id_mahasiswa');
    }
}
