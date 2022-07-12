<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'jenis' => 'bail|required:tb_transaksi',
                'tarif' => 'required',
                'tgl_transaksi' => 'required',
                'konsumen' => 'required'

            ],
            [
                'jenis.required' => 'jenis wajib diisi',
                'tarif.required' => 'Tarif wajib diisi',
                'tgl_transaksi.required' => 'Tanggal transaksi wajib diisi'
            ]
        );

        Transaksi::create([
            'jenis' => $request->jenis,
            'tarif' => $request->tarif,
            'tgl_transaksi' => $request->tgl_transaksi,
            'tgl_ambil' => $request->tgl_ambil,
            'beratt' => $request->beratt,
            'konsumen' => $request->konsumen
        ]);

        return redirect('transaksi');
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
        $row = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('row'));
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
        $request->validate(
            [
                'jenis' => 'bail|required',
                'tarif' => 'required',
                'tgl_transaksi' => 'required',
                'konsumen' => 'required'
            ],
            [
                'jenis.required' => 'jenis wajib diisi',
                'tarif.required' => 'Tarif wajib diisi',
                'tgl_transaksi.required' => 'Tanggal transaksi wajib diisi',
                'konsumen.required' => 'Konsumen Wajib Diisi'
            ]
        );

        $row = Transaksi::findOrFail($id);
        $row->update([
            'jenis' => $request->jenis,
            'tarif' => $request->tarif,
            'tgl_transaksi' => $request->tgl_transaksi,
            'tgl_ambil' => $request->tgl_ambil,
            'beratt' => $request->beratt,
            'konsumen' => $request->konsumen
        ]);
        
        return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Transaksi::findOrFail($id);
        $row->delete();

        return redirect('transaksi');
    }
}
