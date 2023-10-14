@extends('layouts.main_layouts')
@section('title', 'barang')

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Letak Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Tanggal Pengadaan</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->letak_barang }}</td>
                <td>{{ $data->harga }}</td>
                <td>{{ $data->jumlah_barang }}</td>
                <td>{{ $data->tgl_pengadaan }}</td>
                <td>{{ $data->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
