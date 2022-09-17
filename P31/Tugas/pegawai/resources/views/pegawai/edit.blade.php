@extends('pegawai.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">

                <div class="card-header">
                    Edit Pegawai
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="post" action="{{ route('pegawai.update', $Pegawai->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                    <label for="Nip">Nip</label>
                        <input type="text" name="nip" class="form-control" id="nip" value="{{ $Pegawai->nip }}" aria-describedby="nip" >
                    </div>

                    <div class="form-group">
                    <label for="Nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pegawai->nama }}" aria-describedby="nama" >
                    </div>

                    <div class="form-group">
                    <label for="level">Level</label>
                    <select class="form-control" name='level' id="level">
                        @foreach($level as $lvl)
                                <option value="{{ $lvl->id }}" {{ $Pegawai->level_id == $lvl->id ? 'selected': ''}}>{{ $lvl->nama_level}}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="Jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ $Pegawai->jabatan }}" aria-describedby="jabatan" >
                    </div>

                    <div class="form-group">
                    <label for="Alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $Pegawai->alamat }}" aria-describedby="alamat" >
                    </div>

                    <div class="form-group">
                    <label for="Email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{ $Pegawai->email }}" aria-describedby="email" >
                    </div>

                    <div class="form-group">
                    <label for="Tanggal_Lahir">Alamat</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $Pegawai->tanggal_lahir}}" aria-describedby="tanggal_lahir" >
                    </div>

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" name="image" value="{{$Pegawai->image}}"></br>
                        <img width="150px" src="{{asset('storage/'.$Pegawai->image)}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
