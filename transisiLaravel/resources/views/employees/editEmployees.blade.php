@extends('layout/main')
@section('title', 'Form Tambah Data Karyawan')
@section('container')
    <div class="container">
        <div class="column">
            <div class="row">
                <h1 class="my-3">Form Edit Data Karyawan</h1>
            </div>
        </div>

        <form action="/employees/{{ $employee -> id }}" method="post">
        @method('patch')
        @csrf
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td>
                        <label for="id">ID Karyawan</label>
                    </td>
                    <td>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Isi ID Karyawan" value="{{ $employee -> id }}" readonly required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama Karyawan</label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi Nama Karyawan" value="{{ $employee -> nama }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idCompany">ID Perusahaan</label>
                    </td>
                    <td>
                        <select name="idCompany" id="idCompany" class="form-select">
                            <option value="{{ $employee -> idCompany }}">{{ $employee['idCompany'] }}</option>
                        @foreach ($company as $c)
                            <option value="{{ $c['id'] }}">{{ $c['id'] }}. {{ $c['nama'] }}</option>
                        @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email Karyawan</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Isi email Karyawan" value="{{ $employee -> email }}" required>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <a href="/employees" class="btn btn-warning">Kembali</a>
        </form>
    </div>
@endsection