@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Edit Data Barang</h3>
    <form action="{{ url('/barang/' . $row->id_brg) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" class="form-control" name="nama" value="{{ $row->nama }}"></>
        </div>
        <div class="mb-3">
            <label>TANGGAL UPDATE</label>
            <input type="text" class="form-control" name="tgl_update" value="{{ $row->tgl_update }}"></>
        </div>
        <div class="mb-3">
            <label>BERAT</label>
            <input type="text" class="form-control" name="berat" value="{{ $row->berat }}"></>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE">
        </div>
    </form>
</div>
@endsection