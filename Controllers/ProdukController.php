<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        /* RAW SQL
         $produks = DB::table('select * from produk order by nama');
         return view('produk.index',['arrayProduk'=>$produks]);
        */

        /* Query Builder & ORM eloquent */
        $objproduk = new Produk();
        $ar_produk = $objproduk->get();
        return view('produk.index',['arproduk'=>$ar_produk]);
    }
}
