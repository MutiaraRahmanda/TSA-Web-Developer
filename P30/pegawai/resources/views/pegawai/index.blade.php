@extends('pegawai.layout')

@section('content')
    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
    <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
    </div>
    <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Input pegawai</a>
    </div>
    </div>
    </div>

    <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('pegawai.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button color='black'class="btn btn-info" type="submit" value="Cari" title="Search Nama Pegawai">Cari</button>
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search nama" id="term">
                        <a href="{{ route('pegawai.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">Refresh</button>
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

    @endif

    <table class="table table-bordered">
        <tr>

        <th>Nip</th>
        <th>Nama</th>
        <th>Level</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
        <th width="280px">Action</th>
        </tr>

        @foreach ($pegawai as $pgw)
        <tr>

        <td>{{ $pgw ->nip }}</td>
        <td>{{ $pgw ->nama }}</td>
        <td>{{ $pgw ->level->nama_level }}</td>
        <td>{{ $pgw ->jabatan }}</td>
        <td>{{ $pgw ->alamat }}</td>
        <td>{{ $pgw ->email }}</td>
        <td>{{ $pgw ->tanggal_lahir}}</td>
        <td>
        <form action="{{ route('pegawai.destroy',['pegawai'=>$pgw->id]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('pegawai.show',$pgw->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('pegawai.edit',$pgw->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a class="btn btn-warning" href="{{ route('pegawai.showGaji', $pgw->id) }}">Gaji</a>
        </form>
        </td>
        </tr>
        @endforeach
    </table>
    {{$pegawai->links('pagination::bootstrap-4')}}
@endsection
