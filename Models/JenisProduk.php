<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;
    protected $table = 'jenis_produk'; // nama table
    protected $fillable = [
        'nama',
    ];
}