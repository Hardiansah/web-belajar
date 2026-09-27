@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">Tambah Kategori</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="ket_kategori" class="form-label">Keterangan Kategori</label>
                        <input 
                            type="text" 
                            name="ket_kategori" 
                            id="ket_kategori" 
                            class="form-control @error('ket_kategori') is-invalid @enderror" 
                            value="{{ old('ket_kategori') }}" 
                            placeholder="Masukkan nama kategori" 
                            required
                        >
                        @error('ket_kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
