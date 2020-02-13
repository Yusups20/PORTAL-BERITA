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
                                <label for="">Nama Siswa</label>
                                <select name="siswa_id" class="form-control" readonly>
                                <option value="{{$data->id}}">{{$data->siswa->nama}} - {{$data->siswa->kelas}}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Masukan Jumlah Uang</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control"  type="number" value="{{$data->jumlah_uang}}" readonly name="jumlah_uang">
                            </div>
                        </div>
                        <a class="btn btn-dark" href=" {{ route('tabungan.index') }}">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
