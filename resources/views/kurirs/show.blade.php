<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kurir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex justify-content-between mb-4">
                    <h2>Detail Kurir</h2>
                    <a class="btn btn-secondary" href="{{ route('kurirs.index') }}">Kembali</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama_kurir" class="form-label">Nama Kurir</label>
                            <input type="text" id="nama_kurir" class="form-control" value="{{ $kurir->nama_kurir }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" id="telepon" class="form-control" value="{{ $kurir->telepon }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="wilayah_operasi" class="form-label">Wilayah Operasi</label>
                            <input type="text" id="wilayah_operasi" class="form-control" value="{{ $kurir->wilayah_operasi }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
