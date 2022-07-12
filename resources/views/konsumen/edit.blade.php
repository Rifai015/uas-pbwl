@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Edit Data Konsumen</h3>
    <form action="{{ url('/konsumen/' . $row->id_konsumen) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" class="form-control" name="nama" value="{{ $row->nama }}"></>
        </div>
        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" class="form-control" name="alamat" value="{{ $row->alamat }}"></>
        </div>
        <div class="mb-3">
            <label>NO TELP</label>
            <input type="text" class="form-control" name="telp" value="{{ $row->telp }}"></>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE">
        </div>
    </form>
</div>
@endsection