<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;
    protected $table = 'kartu';
    protected $fillable = [
        'id',
        'nama',
        'kode',
        'diskon',
        'iuran',
       /* 'created_at',
        'updated_at',*/
    ];
}
