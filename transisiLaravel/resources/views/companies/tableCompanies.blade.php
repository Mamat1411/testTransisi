@section('tableCompanies')
    <div class="tableCompanies my-3">
        <table class="table table-light">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Logo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($companies as $c)
                <tbody>
                    <tr>
                        <td scope="row">{{ $c -> id }}</td>
                        <td>{{ $c -> nama }}</td>
                        <td>{{ $c -> email }}</td>
                        <td>{{ $c -> website }}</td>
                        <td><img src="{{ Storage::url('public/company/').$c -> logo }}" width="100px" height="100px"></td>
                        <td>
                            <a href="/companies/{{ $c -> id }}/edit" class="btn btn-success">Edit</a>
                            <form action="/companies/{{ $c -> id }}" method="post" class="d-inline">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection