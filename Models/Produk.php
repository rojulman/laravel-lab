<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\JenisProduk;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk'; // nama table
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'kode',
        'harga_jual',
        'harga_beli',
        'stok',
        'jenis_produk_id'
    ];

    public function jenis_produk(){
        return $this->belongsTo(JenisProduk::class);
    }
}
