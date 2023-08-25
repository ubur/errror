@extends('layouts.main')

@section('title', 'student')

@section('content')

    <h1>Halaman student</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama</th>
                <th>Students</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $data->name }} </td>
                    <td>
                        @foreach ($data->students as $student)
                            - {{ $student['name'] }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
