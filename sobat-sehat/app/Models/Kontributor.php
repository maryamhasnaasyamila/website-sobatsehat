<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontributor extends Model
{
    use HasFactory;
    protected $table = 'kontributor';
    protected $fillable = ['nama_kontributor', 'username', 'password', 'email'];
    public $timestamps = false;
}
