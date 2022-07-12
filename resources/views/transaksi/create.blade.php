@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Tambah Data Transaksi</h3>
    <form action="{{ url('/transaksi') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>JENIS</label>
            <input type="text" class="form-control" name="jenis">
        </div>
        <div class="mb-3">
            <label>TARIF</label>
            <input type="text" class="form-control" name="tarif">
        </div>
        <div class="mb-3">
            <label >TANGGAL TRANSAKSI</label>
            <input type="text" class="form-control" name="tgl_transaksi" value="<?php echo "" . date("Y/m/d") . ""; ?>">
      </div>
      <div class="mb-3">
            <label >TANGGAL AMBIL</label>
            <input type="text" class="form-control" name="tgl_ambil" value="<?php echo "" . date("Y/m/d") . ""; ?>">
      </div>
      <div class="mb-3">
            <label >BERAT</label>
            <input type="text" class="form-control" name="beratt" >
      </div>
      <div class="mb-3">
            <label >KONSUMEN</label>
            <input type="text" class="form-control" name="konsumen" >
      </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>
@endsection