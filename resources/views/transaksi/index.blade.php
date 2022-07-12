@extends('layouts.app')

@section('content')
<div class="container">
    <h3> Daftar Transaksi</h3>
    <a class="btn btn-primary btn-sm float-end" href="{{ url('transaksi/create') }}">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>JENIS</th>
            <th>TARIF</th>
            <th>TANGGAL TRANSAKSI</th>
            <th>TANGGAL AMBIL</th>
            <th>BERAT</th>
            <th>KONSUMEN</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->id_transaksi }}</td>
            <td>{{ $row->jenis }}</td>
            <td>{{ $row->tarif }}</td>
            <td>{{ $row->tgl_transaksi }}</td>
            <td>{{ $row->tgl_ambil }}</td>
            <td>{{ $row->beratt }}</td>
            <td>{{ $row->konsumen }}</td>
            <td><a href="{{ url('transaksi/' . $row->id_transaksi . '/edit') }} " class="btn btn-warning btn-sm">Edit</a></td>
            <td>
                <form action="{{ url('transaksi/' . $row->id_transaksi) }}" method="POST">
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