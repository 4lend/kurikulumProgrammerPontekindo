@extends('layouts.main_layouts')
@section('title', 'Rawat Jalan | Add Data')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="">
            <div class="mb-3">
                <label for="name">Nama </label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="no_bpjs">No BPJS</label>
                <input type="text" class="form-control" id="no_bpjs" required>
            </div>
            <div class="mb-3">
                <label for="poli">Poli</label>
                <select name="poli" id="poli" class="form-control" required>
                    <option value="">Pilih Poli</option>
                    <option value="Poli Umum">Poli Umum</option>
                    <option value="Poli Gigi">Poli Gigi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="dokter">Dokter</label>
                <select name="dokter" id="dokter" class="form-control" required>
                    <option value="">Pilih Dokter</option>
                    <option value="Dr. Vania Utami">Dr. Vania Utami</option>
                    <option value="Dr. Pitoyo">Dr. Pitoyo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
        {{ var_dump($rawatJalan) }}
        <br><br>
        {{ $rawatJalan }}
    <div>

@endsection
