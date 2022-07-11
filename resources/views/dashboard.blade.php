<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Aset Barang</title>
</head>
<body>
    <body style="background: lightgray">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title position-relative text-center">Aset Barang</h3>
                            <a role="button" href="{{ route('keluar')}}" class="mb-auto p-1 btn btn-danger">Logout</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stok Barang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $data)
                                    <tr>
                                        <td>{{ $data->id_barang }}</td>
                                        <td>{{ $data->nama_barang }}</td>
                                        <td>{{ $data->stok }}</td>
                                        <td>
                                            <a href="/edit/{{ $data->id_barang }}"  class="btn btn-md btn-success sm-1">Edit</a>
                                            <a href="/dashboard/{{ $data->id_barang }}"  class="btn btn-md btn-danger sm-1">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/form-input" class="btn btn-md btn-success mb-3">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        @if(session('success'))
        alert('{{ session('success') }}')
        @endif
    </script>
</body>
</html>