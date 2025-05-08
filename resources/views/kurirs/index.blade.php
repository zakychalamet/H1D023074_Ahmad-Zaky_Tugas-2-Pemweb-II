<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kurir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between mb-4">
                    <h2>Daftar Kurir</h2>
                    <a class="btn btn-success" href="{{ route('kurirs.create') }}">Tambah Kurir</a>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kurir</th>
                                        <th>Telepon</th>
                                        <th>Wilayah Operasi</th>
                                        <th width="280px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kurirs as $kurir)
                                        <tr>
                                            <td>{{ ($kurirs->currentPage() - 1) * $kurirs->perPage() + $loop->index + 1 }}</td>
                                            <td>{{ $kurir->nama_kurir }}</td>
                                            <td>{{ $kurir->telepon }}</td>
                                            <td>{{ $kurir->wilayah_operasi }}</td>
                                            <td>
                                                <form action="{{ route('kurirs.destroy', $kurir->id) }}" method="POST">
                                                    <a class="btn btn-info btn-sm" href="{{ route('kurirs.show', $kurir->id) }}">Detail</a>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('kurirs.edit', $kurir->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data kurir</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    {{ $kurirs->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>