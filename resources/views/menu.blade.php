@extends('layouts.app') <!-- Ganti dengan layout yang sesuai -->

@section('content')
<div class="container">
    <h1 class="mb-4">Data Rekapan Kerja Operasional</h1>

    <!-- Notifikasi sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form pencarian -->
    <form action="/rko" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari data..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-secondary">Cari</button>
        </div>
    </form>

    <!-- Tabel data -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
                <!-- Tambahkan kolom lainnya sesuai struktur data -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $key => $row)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $row['kolom1'] ?? 'N/A' }}</td>
                    <td>{{ $row['kolom2'] ?? 'N/A' }}</td>
                    <td>{{ $row['kolom3'] ?? 'N/A' }}</td>
                    <!-- Tambahkan kolom lainnya -->
                    <td>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Form tambah data -->
    <h2 class="mt-5">Tambah Data</h2>
    <form action="/rko/add" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kolom1" class="form-label">Kolom 1</label>
            <input type="text" name="kolom1" id="kolom1" class="form-control" placeholder="Masukkan data kolom 1" required>
        </div>
        <div class="mb-3">
            <label for="kolom2" class="form-label">Kolom 2</label>
            <input type="text" name="kolom2" id="kolom2" class="form-control" placeholder="Masukkan data kolom 2" required>
        </div>
        <div class="mb-3">
            <label for="kolom3" class="form-label">Kolom 3</label>
            <input type="text" name="kolom3" id="kolom3" class="form-control" placeholder="Masukkan data kolom 3" required>
        </div>
        <!-- Tambahkan input lainnya jika diperlukan -->
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</div>
@endsection