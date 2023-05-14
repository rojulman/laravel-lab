<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function index()
    {
        return view('periksa/index',[]);
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $usia = $request->input('usia');
        $tanggal = $request->input('tanggal');
        $gender = $request->input('gender');
        $berat_badan = $request->input('berat');
        $tekanan_darah = $request->input('tekanan_darah');

        return view('periksa/hasil',
        [
           'nama'=>$nama,
           'usia'=>$usia,
           'gender'=>$gender,
           'tanggal'=>$tanggal,
           'berat_badan'=>$berat_badan,
           'tekanan_darah'=>$tekanan_darah,
        ]
    );
    }
    
}

?>