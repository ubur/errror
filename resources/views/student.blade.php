@extends('layouts.main')

@section('title', 'student')

@section('content')

    <h1>Halaman student</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Classs</th>
                <th>Eskul</th>
            </tr>
        </thead>
        @foreach ($studentList as $data)
            <tr>

                <td> {{ $loop->iteration }} </td>
                <td> {{ $data->name }} </td>
                <td> {{ $data->gender }} </td>
                <td> {{ $data->class['name'] }} </td>
                <td>
                    @foreach ($data->eskuls as $item)
                        - {{ $item->name }} <br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
@endsection
