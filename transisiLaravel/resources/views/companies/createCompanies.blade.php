@extends('layout/main')
@section('title', 'Form Tambah Data Perusahaan')
@section('container')
    <div class="container">
        <div class="column">
            <div class="row">
                <h1 class="my-3">Form Simpan Data Perusahaan</h1>
            </div>
        </div>

        <form action="/companies" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td>
                        <label for="id">ID Perusahaan</label>
                    </td>
                    <td>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Isi ID Perusahaan" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama Perusahaan</label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi Nama Perusahaan" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email Perusahaan</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Isi email Perusahaan" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="website">Website Perusahaan</label>
                    </td>
                    <td>
                        <input type="text" name="website" id="website" class="form-control" placeholder="Isi website Perusahaan" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="logo">Logo Perusahaan</label>
                    </td>
                    <td>
                        <input type="file" name="logo" id="logo" class="form-control" required>
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