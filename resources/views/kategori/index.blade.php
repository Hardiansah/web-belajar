@extends('layouts.app')

@section('title', 'Data Kategori')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data Kategori</h5>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm">+ Tambah Kategori</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>ID Kategori</th>
                    <th>Keterangan Kategori</th>
                    <th style="width: 150px;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kategori as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id_kategori }}</td>
                        <td>{{ $item->ket_kategori }}</td>
                        <td class="text-center">
                            <a href="{{ route('kategori.edit', $item->id_kategori) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('kategori.destroy', $item->id_kategori) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada data kategori.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
