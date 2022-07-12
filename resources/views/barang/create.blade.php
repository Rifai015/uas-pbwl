@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Tambah Data Barang</h3>
    <form action="{{ url('/barang') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label>TANGGAL UPDATE</label>
            <input type="text" class="form-control" name="tgl_update" value="<?php echo "" . date("Y/m/d") . ""; ?>">
        </div>
        <div class="mb-3">
            <label>BERAT</label>
            <input type="text" class="form-control" name="berat">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>
@endsection