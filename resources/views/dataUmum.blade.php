@extends('layouts')

@section('styles')
<style>
    .container {
        display: flex;
        justify-content: flex-start;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-left: 0;
        width: auto;
    }

    h1 {
        color: #333;
        /* margin-bottom: 20px; */
        margin-right: 70%;
    }

    .alert-danger {
        margin-bottom: 20px;
    }

    .alert-danger ul {
        margin: 0;
        padding-left: 20px;
    }

    .alert-danger li {
        list-style-type: disc;
    }

    .form-label {
        font-weight: bold;
        color: #4e73df;
    }

    .form-control {
        width: 100%;
        box-sizing: border-box;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-top: 5px;
    }

    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 5px rgba(78, 115, 223, 0.5);
    }

    .mb-3 {
        margin-bottom: 20px;
    }

    .form-container {
        width: 100%;
        margin: 0;
    }

    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #3b5bbf;
        border-color: #3b5bbf;
    }

    .container-show {
        margin-top: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    /* Table */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table td {
        background-color: #fff;
    }

    /* No Data Message */
    .no-data {
        margin-top: 20px;
        text-align: center;
        font-style: italic;
        color: #888;
    }

</style>
@endsection

@section('content')
<h1 class="mb-4">Create Data Umum</h1>

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tempatDesa" class="form-label">Tempat Desa:</label>
                <input type="text" name="tempatDesa" class="form-control" required="" placeholder="Provinsi,Kabupateb,Kecamatan,Desa">
            </div>

            <div class="mb-3">
                <label for="alamatKantor" class="form-label">Alamat Kantor:</label>
                <textarea name="alamatKantor" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="npwp" class="form-label">NPWP:</label>
                <input type="text" name="npwp" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="kodeDesa" class="form-label">Kode Desa:</label>
                <input type="number" name="kodeDesa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kepalaDesa" class="form-label">Kepala Desa:</label>
                <input type="text" name="kepalaDesa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="noPerbubPjb" class="form-label">No Perbub PJB:</label>
                <input type="number" name="noPerbubPjb" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggalPerbubPjb" class="form-label">Tanggal Perbub PJB:</label>
                <input type="date" name="tanggalPerbubPjb" class="form-control">
            </div>

            <div class="mb-3">
                <label for="noKeputusanDpa" class="form-label">No Keputusan DPA:</label>
                <input type="number" name="noKeputusanDpa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggalKeputusanDpa" class="form-label">Tanggal Keputusan DPA:</label>
                <input type="date" name="tanggalKeputusanDpa" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

<h1 class="mb-4">Data Umum</h1>

<div class="container-show">
    

    @if ($dataUmum->isEmpty())
        <p>No data available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tempat Desa</th>
                    <th>Alamat Kantor</th>
                    <th>NPWP</th>
                    <th>Kode Desa</th>
                    <th>Kepala Desa</th>
                    <th>No Perbub PJB</th>
                    <th>Tanggal Perbub PJB</th>
                    <th>No Keputusan DPA</th>
                    <th>Tanggal Keputusan DPA</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataUmum as $data)
                    <tr>
                        <td>{{ $data->tempatDesa }}</td>
                        <td>{{ $data->alamatKantor }}</td>
                        <td>{{ $data->npwp }}</td>
                        <td>{{ $data->kodeDesa }}</td>
                        <td>{{ $data->kepalaDesa }}</td>
                        <td>{{ $data->noPerbubPjb }}</td>
                        <td>{{ $data->tanggalPerbubPjb }}</td>
                        <td>{{ $data->noKeputusanDpa }}</td>
                        <td>{{ $data->tanggalKeputusanDpa }}</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
