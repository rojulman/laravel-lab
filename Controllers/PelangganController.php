<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\Kartu;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$pelanggan = Pelanggan::with('kartu')->get();
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', ['pelanggan' => $pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kartu = Kartu::all();
        return view('pelanggan.form',['ar_kartu'=>$kartu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelanggan = new Pelanggan;
        $pelanggan->nama = $request->nama;
        $pelanggan->kode = $request->kode;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->kartu_id = $request->id_kartu;
        $pelanggan->email = $request->email;
        $pelanggan->save();
        return redirect('/pelanggan');

    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $pelanggan = Pelanggan::find($id);//select * from pelanggan where id=1
        return view('pelanggan.show', ['pelanggan' => $pelanggan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kartu = Kartu::all();
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.form_edit', ['pelanggan' => $pelanggan,'ar_kartu'=>$kartu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $idedit = $request->idedit;
        $pelanggan = Pelanggan::find($idedit);
        $pelanggan->nama = $request->nama;
        $pelanggan->kode = $request->kode;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->kartu_id = $request->id_kartu;
        $pelanggan->email = $request->email;
        $pelanggan->save();
        return redirect('/pelanggan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();//delete from pelanggan where id=1
        return redirect('/pelanggan');
    }
}
