<!-- resources/views/child.blade.php -->

@extends('layouts.main_layouts')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <h1>ini adalah home page yang sudah menggunakan layouts</h1>
@endsection

    <!-- @if (empty($nama)) -->
    @if (count($records) === 1)
        I have one record!
    @elseif (count($records) > 1)
        I have multiple records!
    @else
        I don't have any records!
    @endif
