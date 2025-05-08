<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex justify-content-between mb-4">
                    <h2>Tambah Kurir Baru</h2>
                    <a class="btn btn-secondary" href="{{ route('kurirs.index') }}">Kembali</a>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        < Ada beberapa masalah dengan input.<br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('kurirs.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nama_kurir" class="form-label">Nama Kurir</label>
                                <input type="text" name="nama_kurir" id="nama_kurir" class="form-control" value="{{ old('nama_kurir') }}" placeholder="Masukkan nama kurir">
                            </div>

                            <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" value="{{ old('telepon') }}" placeholder="Masukkan nomor telepon">
                            </div>

                            <div class="mb-3">
                                <label for="wilayah_operasi" class="form-label">Wilayah Operasi</label>
                                <input type="text" name="wilayah_operasi" id="wilayah_operasi" class="form-control" value="{{ old('wilayah_operasi') }}" placeholder="Masukkan wilayah operasi">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>