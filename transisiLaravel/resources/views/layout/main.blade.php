<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset ('/css/style.css') }}" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img height="50px" width="90px" src="{{ asset ('images/index.jpg')}}" alt="Logo Transisi">
                </a>
            </div>
        </nav>
    </div>
    <div class="sidebar">
        <ul>
            <li><a href="/" class="text-decoration-none"><b>Beranda</b></a></li>
            <li><a href="{{ url('/companies') }}" class="text-decoration-none"><b>Data Perusahaan</b></a></li>
            <li><a href="{{ url('/employees') }}" class="text-decoration-none"><b>Data Karyawan</b></a></li>
            {{-- @if (auth()->user()->email == 'admin@transisi.id')
            <li><a href="{{ url('/Logout') }}" class="text-decoration-none"><b>Logout</b></a></li>                                
            @else
            <li><a href="{{ url('/login') }}" class="text-decoration-none"><b>Login</b></a></li>                
            @endif --}}
        </ul>
    </div>
    @yield('container')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>   
</body>
</html>