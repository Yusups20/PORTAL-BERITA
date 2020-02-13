@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Siswa</div>

                <div class="card-body">
                    <form action="{{ route('siswa.update',$siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Masukan Nama Siswa</label>
                            </div>
                            <div class="col-md-8">
                            <input type="text" name="nama" value="{{$siswa->nama}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Masukan Kelas Siswa</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="kelas" value="{{$siswa->kelas}}" required>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
