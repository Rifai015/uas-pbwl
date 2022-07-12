<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Konsumen::all();
        return view('konsumen.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsumen.create');
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
                'nama' => 'bail|required|unique:tb_konsumen',
                'alamat' => 'required',
                'telp' => 'required'
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'alamat.required' => 'alamat wajib diisi',
                'telp.required' => 'no telp wajib diisi'
            ]);

            Konsumen::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'telp' => $request->telp
                
            ]);
    
            return redirect('konsumen');
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
        $row = Konsumen::findOrFail($id);
        return view('konsumen.edit', compact('row'));
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
                'alamat' => 'required',
                'telp' => 'required'
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'alamat.required' => 'Alamat wajib diisi',
                'telp.required' => 'No telp wajib diisi'
            ]
        );

        $row = Konsumen::findOrFail($id);
        $row->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat, 
            'telp' => $request->telp
        ]);

        return redirect('konsumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Konsumen::findOrFail($id);
        $row->delete();

        return redirect('konsumen');
    }
}
