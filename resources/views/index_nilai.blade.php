@extends('template')

@section('content')
    <style>
        .card-header {
            font-weight: bold;
            background-color: #343a40;
            color: white;
        }
        .btn-action {
            width: 100px;
        }
        /* Style untuk pagination agar rapi */
        .pagination {
            margin-bottom: 0;
        }
    </style>

    <div class="row">
        <div class="col-md-12">

            {{-- Pesan Sukses (sesuai dengan redirect()->with('success',...)) --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            {{-- Card untuk membungkus tabel dan tombol --}}
            <div class="card border-0 shadow-sm rounded">
                <div class="card-header text-center">
                    <h4>Manajemen Data Nilai</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col" class="text-center">NRP</th>
                                    <th scope="col" class="text-center">Nilai Angka</th>
                                    <th scope="col" class="text-center">SKS</th>
                                    <th scope="col" class="text-center">Nilai Huruf</th>
                                    <th scope="col" class="text-center" style="width: 15%">Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($nilai as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->normorinduksiswa }}</td>
                                    <td>{{ $p->nilaiangka }}</td>
                                    <td>{{ $p->sks }}</td>
                                    <td class="text-center">
                                        @if ($p->nilaiangka >= 81)
                                            A
                                        @elseif ($p->nilaiangka >= 61)
                                            B
                                        @elseif ($p->nilaiangka >= 41)
                                            C
                                        @else
                                            D
                                        @endif
                                    </td>
                                    <td>{{($p->nilaiangka * $p->sks)}}</td>
                                </tr>
                                @empty
                                    {{-- Blok ini akan ditampilkan jika $nilai kosong --}}
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <div class="alert alert-danger">
                                                Data nilai masih kosong.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse {{-- <<< INI PENUTUP YANG HILANG --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                    {{-- Tombol ini mengarah ke route 'karyawan.tambah' --}}
                    <a href="/nilai/tambah" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                    {{-- Menampilkan link Paginasi --}}
                    {{ $nilai->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
