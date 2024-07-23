@extends('layouts')

@section('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4e73df;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }
        .data-table th, .data-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .data-table th {
            background-color: #4e73df;
            color: white;
        }
        .btn-secondary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c757d;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <h1>Detail Data Umum</h1>
        <table class="data-table">
            <tr>
                <th>Desa</th>
                <td>{{ $dataUmum->desa }}</td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <td>{{ $dataUmum->kecamatan }}</td>
            </tr>
            <tr>
                <th>Kabupaten</th>
                <td>{{ $dataUmum->kabupaten }}</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>{{ $dataUmum->provinsi }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $dataUmum->alamat }}</td>
            </tr>
            <tr>
                <th>NPWP</th>
                <td>{{ $dataUmum->npwp }}</td>
            </tr>
            <tr>
                <th>Kode Desa</th>
                <td>{{ $dataUmum->kodeDesa }}</td>
            </tr>
            <tr>
                <th>Kepala Desa</th>
                <td>{{ $dataUmum->kepalaDesa }}</td>
            </tr>
            <tr>
                <th>No Perbub Pjb</th>
                <td>{{ $dataUmum->noPerbubPjb }}</td>
            </tr>
            <tr>
                <th>Tanggal Perbub Pjb</th>
                <td>{{ $dataUmum->tanggalPerbubPjb }}</td>
            </tr>
            <tr>
                <th>No Keputusan Dpa</th>
                <td>{{ $dataUmum->noKeputusanDpa }}</td>
            </tr>
            <tr>
                <th>Tanggal Keputusan Dpa</th>
                <td>{{ $dataUmum->tanggalKeputusanDpa }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $dataUmum->email }}</td>
            </tr>
        </table>
        <a href="{{ route('dataUmum.index') }}" class="btn-secondary">Kembali</a>
    </div>
@endsection
