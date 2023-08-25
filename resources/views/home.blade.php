@extends('layouts.main')

@section('title', 'home')

@section('content')
    <h1>Halaman</h1>
    <h5>selamat datang {{ $name }} kamu adalah admin </h5>
    <table class="table">
        <tr>
            <th>Nomer</th>
            <th>Nama</th>
        </tr>
        @foreach ($buah as $data)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td> {{ $data }} </td>
            </tr>
        @endforeach
    </table>
@endsection
