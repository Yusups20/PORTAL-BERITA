@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>

                <div class="card-body">
                    <form action="{{ route('tabungan.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Pilih Nama Siswa</label>
                            </div>
                            <div class="col-md-8">
                                <select name="siswa_id" class="form-control">
                                    @foreach ($data as $item)
                                <option value="{{$item->id}}">{{$item->nama}} - {{$item->kelas}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Masukan Jumlah Uang</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="jumlah_uang" required>
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
