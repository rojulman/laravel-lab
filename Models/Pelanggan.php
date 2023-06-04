<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kartu;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "pelanggan";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama',
        'kode',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'kartu_id',
        'email',
       /* 'created_at',
        'updated_at',*/
    ];

    public function kartu()
    {
        return $this->belongsTo(Kartu::class);
    } 
}
