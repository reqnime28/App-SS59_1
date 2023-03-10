<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Models\Metodebayar;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Urutan Nomor
        $nomor = 1;
        $pesan = Pesan::all();
        return view('pesan.index',compact('nomor','pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Dari model Metodebayar
        $metodebayar = Metodebayar::all();
        return view('pesan.form',compact('metodebayar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan = new Pesan;
               //Database    ||   Data Dari Nama Form
        $pesan->no_plg = $request->no_plg;
        $pesan->nama_brg = $request->barang;
        $pesan->tanggal_hari = $request->tanggal;
        $pesan->metodebayars_id = $request->metode_bayar;
        $pesan->harga = $request->harga;
        $pesan->foto = "default.jpg";

        $pesan->save();

        return redirect('/pesan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metodebayar = Metodebayar::all();
        $pesan = Pesan::find($id);
        return view('pesan.edit',compact('pesan','metodebayar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pesan = Pesan::find($id);
               //Database    ||   Data Dari Nama Form
        $pesan->no_plg = $request->no_plg;
        $pesan->nama_brg = $request->barang;
        $pesan->tanggal_hari = $request->tanggal;
        $pesan->metodebayars_id = $request->metode_bayar;
        $pesan->harga = $request->harga;
        $pesan->foto = "default.jpg";

        $pesan->save();

        return redirect('/pesan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesan = Pesan::find($id);
        $pesan->delete();

        return redirect('/pesan');
    }
}
