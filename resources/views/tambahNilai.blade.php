@extends('template')

@section('content')

	<h3>Data Nilai</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="id">
                {{-- for="nama" merefer ke id pada input --}}
                ID
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="id"
                    placeholder="Masukkan ID"
                    name="id" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="normorinduksiswa">
                NRP
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="normorinduksiswa"
                    placeholder="Masukkan NRP"
                    name="normorinduksiswa" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="nilaiangka">
                Nilai Angka
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="nilaiangka"
                    placeholder="Masukkan Nilai dalam Angka"
                    name="nilaiangka" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="sks">
                {{-- for="nama" merefer ke id pada input --}}
                SKS
            </label>
            <div class="col-sm-6">
                <textarea class="form-control"
                    type="text"
                    id="sks"
                    placeholder="Masukkan besar SKS"
                    name="sks" required="required">
                </textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
