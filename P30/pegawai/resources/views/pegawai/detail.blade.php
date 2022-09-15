@extends('pegawai.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">

            <div class="card-header">
                Detail Pegawai
            </div>

            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nip: </b>{{$Pegawai->nip}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Pegawai->nama}}</li>
                    <li class="list-group-item"><b>Level: </b>{{$Pegawai->level->nama_level}}</li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$Pegawai->jabatan}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Pegawai->alamat}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$Pegawai->email}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$Pegawai->tanggal_lahir}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('pegawai.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
