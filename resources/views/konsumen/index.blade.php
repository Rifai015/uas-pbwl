@extends('layouts.app')

@section('content')
<div class="container">
    <h3> Daftar Konsumen</h3>
    <a class="btn btn-primary btn-sm float-end" href="{{ url('konsumen/create') }}">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO TELP</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->id_konsumen}}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->telp }}</td>
            <td><a href="{{ url('konsumen/' . $row->id_konsumen . '/edit') }} " class="btn btn-warning btn-sm">Edit</a></td>
            <td>
                <form action="{{ url('konsumen/' . $row->id_konsumen) }}" method="POST">
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