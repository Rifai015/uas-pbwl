@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Tambah Data Konsumen</h3>
    <form action="{{ url('/konsumen') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <div class="mb-3">
            <label>NO TELP</label>
            <input type="text" class="form-control" name="telp">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>
@endsection