@extends('pegawai.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-sm-10">
        <h3>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h3>
    </div>
    <br><br>
    <br><br>
    <div class="col-sm-4">
        <h3>SLIP GAJI PEGAWAI</h3>
    </div>
</div>

<p><strong>Nip&nbsp;: </strong>{{ $pegawai->nip }}</p>
<p><strong>Nama&nbsp;: </strong>{{ $pegawai->nama }}</p>
<p><strong>Level&nbsp;: </strong>{{ $pegawai->level->nama_level }}</p>

<table class="table table-bordered">
    <tr>
        <th>Divisi</th>
        <th>Kehadiran</th>
        <th>No Rekening</th>
        <th>Gaji</th>
    </tr>

    @foreach($pegawai->divisi as $item)
    <tr>
        <td>{{ $item->nama_divisi }}</td>
        <td>{{ $item->kehadiran }}</td>
        <td>{{ $item->rekening}}</td>
        <td>{{ $item->pivot->gaji }}</td>
    </tr>
    @endforeach

</table>
<div class="row justify-content-end">
    <a href="{{ route('pegawai.index') }}" class="btn btn-danger">Kembali</a>
</div>
@endsection
