@section('tableEmployees')
    <div class="tableEmployees my-3">
        <table class="table table-light">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Perusahaan</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($employees as $e)
                <tbody>
                    <tr>
                        <td scope="row">{{ $e -> id }}</td>
                        <td>{{ $e -> nama }}</td>
                        <td>{{ $e -> idCompany }}</td>
                        <td>{{ $e -> email }}</td>
                        <td>
                            <a href="/employees/{{ $e -> id }}/edit" class="btn btn-success">Edit</a>
                            <form action="/employees/{{ $e -> id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>                            
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection