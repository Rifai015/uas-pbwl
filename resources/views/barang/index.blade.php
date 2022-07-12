@extends('layouts.app')

@section('content')
<div class="container">
    <h3> Daftar Barang</h3>
    <a class="btn btn-primary btn-sm float-end" href="{{ url('barang/create') }}">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>TANGGAL UPDATE</th>
            <th>BERAT</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->id_brg}}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->tgl_update }}</td>
            <td>{{ $row->berat }}</td>
            <td><a href="{{ url('barang/' . $row->id_brg . '/edit') }} " class="btn btn-warning btn-sm">Edit</a></td>
            <td>
                <form action="{{ url('barang/' . $row->id_brg) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

 @endsection