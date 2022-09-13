<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        // $pegawai = $pegawai = DB::table('pegawai')->get(); // Mengambil semua isi tabel
        $pegawai = Pegawai::where([
            ['nama', '!=', Null],
            [function ($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('nama', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])->orderBy('id','desc')
            ->paginate(3);
        return view('pegawai.index', compact('pegawai'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Pegawai::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pegawai.index')
        ->with('success', 'Pegawai Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id Pegawai
        $Pegawai = Pegawai::find($id);
        return view('pegawai.detail', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id Pegawai untuk diedit
        $Pegawai = DB::table('pegawai')->where('id', $id)->first();
        return view('pegawai.edit', compact('Pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Pegawai::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pegawai.index')
        ->with('success', 'Pegawai Berhasil Diupdate');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Pegawai::find($id)->delete();
        return redirect()->route('pegawai.index')
        -> with('success', 'Pegawai Berhasil Dihapus');
    }
};
