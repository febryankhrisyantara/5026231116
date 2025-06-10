@extends('template')

@section('content')

<div class="container mt-5 mb-5">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            {{-- Card untuk membungkus semua konten --}}
            <div class="card border-0 shadow-sm rounded">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h4 class="font-weight-bold mb-0">Manajemen Data Truk</h4>
                    {{-- Tombol Tambah Data --}}
                    <a href="/truk/tambah" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Truk Baru
                    </a>
                </div>

                <div class="card-body">
                    {{-- Form Pencarian --}}
                    <form action="/truk/cari" method="GET" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="cari" class="form-control" placeholder="Cari berdasarkan merk truk..." value="{{ request('cari') }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="fas fa-search"></i> Cari
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- Tabel Data Truk --}}
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">Merk Truk</th>
                                    <th scope="col" class="text-center">Harga</th>
                                    <th scope="col" class="text-center">Berat (Kg)</th>
                                    <th scope="col" class="text-center">Ketersediaan</th>
                                    <th scope="col" class="text-center" style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Loop data truk, gunakan @forelse untuk handle jika data kosong --}}
                                @forelse ($truk as $t)
                                <tr>
                                    <td class="text-center">{{ $t->merktruk }}</td>
                                    {{-- Format harga dengan pemisah ribuan --}}
                                    <td class="text-center">Rp. {{ number_format($t->hargatruk, 0, ',', '.') }}</td>
                                    {{-- Format berat dengan 2 desimal --}}
                                    <td class="text-center">{{ number_format($t->berat, 2, ',', '.') }} Kg</td>
                                    <td class="text-center">
                                        {{-- Tampilkan status dengan badge agar lebih visual --}}
                                        @if($t->tersedia == 1)
                                            <span class="badge badge-success">Tersedia</span>
                                        @else
                                            <span class="badge badge-secondary">Tidak Tersedia</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center" style="gap: 5px;">
                                            <a href="/truk/edit/{{ $t->ID }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <a href="/truk/hapus/{{ $t->ID }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                {{-- Tampilan jika data tidak ditemukan --}}
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <div class="alert alert-danger">
                                            Data Truk belum Tersedia atau tidak ditemukan.
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer bg-white d-flex justify-content-end">
                    {{-- Link Paginasi --}}
                    {{ $truk->links() }}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
