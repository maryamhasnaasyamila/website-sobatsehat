<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $table = 'lokasi';
    protected $fillable = ['nama_lokasi', 'alamat', 'kota'];
    public $timestamps = false;

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
}
