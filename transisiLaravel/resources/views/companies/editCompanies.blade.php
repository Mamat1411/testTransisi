@extends('layout/main')
@section('title', 'Form Edit Data Perusahaan')
@section('container')
    <div class="container">
        <div class="column">
            <div class="row">
                <h1 class="my-3">Form Edit Data Perusahaan</h1>
            </div>
        </div>

        <form action="/companies/{{ $company -> id }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td>
                        <label for="id">ID Perusahaan</label>
                    </td>
                    <td>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Isi ID Perusahaan" value="{{ $company -> id }}" readonly required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama Perusahaan</label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi Nama Perusahaan" value="{{ $company -> nama }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email Perusahaan</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Isi email Perusahaan" value="{{ $company -> email }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="website">Website Perusahaan</label>
                    </td>
                    <td>
                        <input type="text" name="website" id="website" class="form-control" placeholder="Isi website Perusahaan" value="{{ $company -> website }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="logo">Logo Perusahaan</label>
                    </td>
                    <td>
                        <img src="{{ Storage::url('public/company/').$company -> logo }}" width="100px" height="100px">
                        <input type="file" name="logo" id="logo" class="form-control">
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <a href="/companies" class="btn btn-warning">Kembali</a>
        </form>
    </div>
@endsection