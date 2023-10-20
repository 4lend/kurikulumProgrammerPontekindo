@extends('layouts.second_layouts')
@section('title', 'barang-add')

@section('barang-add')
<div class="container bg-white mx-auto ">
    <div class="d-flex justify-content-center">
        <form>
            <div class="mb-3">
                <label for="samaDenganID" class="form-label">Nama Barang</label>
                <input type="email" class="form-control" id="" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="samaDenganID" class="form-label">Letak Barang</label>
                <input type="password" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="password" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
                <input type="password" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal Pengadaan</label>
                <input type="password" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <input type="password" class="form-control" id="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
