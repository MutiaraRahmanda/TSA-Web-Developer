<!DOCTYPE html>
<html>

<head>
      <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
      <style type="text/css">
            table tr td,
            table tr th {
                  font-size: 9pt;
            }
      </style>
              <div class="pull-left mt-2">
                  <h3 style="text-align: center"><u>Data Pegawai </u></h3><br>
              </div>

     <table class="table table-bordered">
    <thead class="thead-dark">
        <tr style="text-align: center" class="thead-light">
            <th width="50px">No</th>
            <th width="50px">NIP</th>
            <th width="50px">Nama</th>
            <th width="50px">Level</th>
            <th width="50px">Jabatan</th>
            <th width="150px">Alamat</th>
            <th width="150px">Email</th>
            <th width="150px">Gambar</th>
        </tr>
    </thead>
    @foreach ($pegawai as $pgw)
    <tr style="text-align: center">
        <td>{{ $loop->iteration }}</td>
        <td>{{ $pgw ->nip }}</td>
        <td>{{ $pgw ->nama }}</td>
        <td>{{ $pgw ->level->nama_level }}</td>
        <td>{{ $pgw ->jabatan }}</td>
        <td>{{ $pgw ->alamat }}</td>
        <td>{{ $pgw ->email }}</td>
        <td><img width="100px" src="{{ storage_path('app/public/'.$pgw->image) }}"></td></td>
        <td>
        </td>
    </tr>
    @endforeach




            {{-- <tbody>
                  @foreach($pegawai as $p)
                  <tr>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td><img width="100px" src="{{ storage_path('app/public/'.$p->image) }}"></td>
                  </tr>
                  @endforeach
            </tbody> --}}




      </table>

</body>

</html>
