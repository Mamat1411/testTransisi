@extends('layout/main')
@include('employees.tableEmployees')
@section('title', 'Data Karyawan')

@section('container')
<div class="container">
    <div class="column">
        <div class="row">
            <h1 class="my-3">Data Karyawan</h1>
        </div>
    </div>
</div>

<div class="container">
    <a href="/employees/create" class="btn btn-success">Tambahkan Data Karyawan</a>
    @if (session('status'))
        <div class="alert alert-success my-3">
            {{ session('status') }}
        </div>
    @endif

    @yield('tableEmployees')
</div>
@endsection