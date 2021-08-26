@extends('layout/main')
@include('companies.tableCompanies')
@section('title', 'Data Perusahaan')

@section('container')
<div class="container">
    <div class="column">
        <div class="row">
            <h1 class="my-3">Data Perusahaan</h1>
        </div>
    </div>
</div>

<div class="container">
    <a href="/companies/create" class="btn btn-success">Tambahkan Data Perusahaan</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @yield('tableCompanies')
</div>
@endsection