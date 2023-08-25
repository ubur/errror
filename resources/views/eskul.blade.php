@extends('layouts.main')

@section('title', 'eskul')

@section('content')
    <h1>Halaman eskul</h1>

    <table class="table">
        <tr>
            <th>Nomer</th>
            <th>Nama</th>
            <th>anggota</th>
        </tr>
        @foreach ($eskulList as $data)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td> {{ $data->name }} </td>

                <td>
                    @foreach ($data->students as $item)
                        {{ $item->name }} <br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
@endsection
