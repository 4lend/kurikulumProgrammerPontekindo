@extends('layouts.main_layout')
@section('title', 'Home')

@section('content')
    <!-- <h1>Ini Halaman Home</h1> -->
    <!-- <h2>Halo {{ $name }}, Kamu adalah seorang {{ $role }}</h2> -->

    <!-- @if ($role == 'admin')
        <a href="">ke halaman admin</a>
    @elseif ($role == 'staff')
        <a href="">ke halaman gudang</a>
    @else
        <a href="">ke halaman whatever</a>
    @endif

    @switch($role)
        @case($role == 'admin')
            <a href="">ke halaman admin</a>
        @break

        <a href="">ke halaman gudang</a>

        @default
            <a href="">ke halaman whatever</a>
    @endswitch

    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }} <br>
    @endfor -->

    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        @foreach ($buah as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data }}</td>
            </tr>
        @endforeach
    </table>
@endsection
