@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Edit Data Transaksi</h3>
    <form action="{{ url('/transaksi/' . $row->id_transaksi) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label>JENIS</label>
            <input type="text" class="form-control" name="jenis" value="{{ $row->jenis }}"></>
        </div>
        <div class="mb-3">
            <label>TARIF</label>
            <input type="text" class="form-control" name="tarif" value="{{ $row->tarif }}"></>
        </div>
        <div class="mb-3">
            <label >TANGGAL TRANSAKSI</label>
            <input type="text" class="form-control" name="tgl_transaksi" value="{{ $row->tgl_transaksi }}"></>
      </div>
      <div class="mb-3">
            <label >TANGGAL AMBIL</label>
            <input type="text" class="form-control" name="tgl_ambil" value="{{ $row->tgl_ambil }}"></>
      </div>
      <div class="mb-3">
            <label >BERAT</label>
            <input type="text" class="form-control" name="beratt" value="{{ $row->beratt }}"></>
      </div>
      <div class="mb-3">
            <label >KONSUMEN</label>
            <input type="text" class="form-control" name="konsumen" value="{{ $row->konsumen }}"></>
      </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE">
        </div>
    </form>
</div>
@endsection