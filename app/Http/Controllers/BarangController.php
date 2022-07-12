<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Barang::all();
        return view('barang.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
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
                'nama' => 'bail|required:tb_barang',
                'tgl_update' => 'required'
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'tgl_update.required' => 'Tanggal Update wajib diisi',
            ]);

            Barang::create([
                'nama' => $request->nama,
                'tgl_update' => $request->tgl_update,
                'berat' => $request->berat
                
            ]);
    
            return redirect('barang');
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
        $row = Barang::findOrFail($id);
        return view('barang.edit', compact('row'));
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
                'nama' => 'bail|required',
                'tgl_update' => 'required',

            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'tgl_update.required' => 'Tanggal Update wajib diisi',
            ]
        );

        $row = Barang::findOrFail($id);
        $row->update([
            'nama' => $request->nama,
            'tgl_update' => $request->tgl_update, 
            'berat' => $request->berat
        ]);

        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Barang::findOrFail($id);
        $row->delete();

        return redirect('barang');
    }
}
