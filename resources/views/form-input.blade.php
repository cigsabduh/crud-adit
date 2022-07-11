<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Barang</title>
</head>
<body>
    <body style="background: lightgray">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title position-relative">Tambah Barang</h3>
                        </div>
                        <div class="card-body">
                        <form action="/store" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ID Barang</label>
                                <input type="number" class="form-control" name="id_barang" id="exampleFormControlInput1" placeholder="Nama Barang">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" id="exampleFormControlInput1" placeholder="Nama Barang">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Stok Barang</label>
                                <input type="text" class="form-control" name="stok"  id="exampleFormControlInput1" placeholder="Stok Barang">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</body>
</html>