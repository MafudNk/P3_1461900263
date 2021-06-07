<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('guru')
        ->get();
        return view('transaksi_guru', ['data' => $data]);
    }

    public function search(Request $request)
    {
        $nama = $request->nama;

        $data = DB::table('tbl_nilai')
            ->where('data_siswa.nama_siswa','like',"%".$nama."%")
            ->join('setup_kelas','tbl_nilai.id_kelas','=','setup_kelas.id_kelas')
            ->join('setup_pelajaran','tbl_nilai.id_pelajaran','=','setup_pelajaran.id_pelajaran')
            ->join('data_guru','tbl_nilai.id_guru','=','data_guru.id_guru')
            ->join('data_siswa','tbl_nilai.id_siswa','=','data_siswa.id_siswa')
            ->select('tbl_nilai.nilai', 'setup_kelas.nama_kelas', 'data_guru.nama_guru', 'data_siswa.nama_siswa', 'setup_pelajaran.nama_pelajaran')
            ->get();
        // print_r($data);
        // exit;
        return view('transaksi_nilai_0263', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_guru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->get('nama');
        $mengajar = $request->get('mengajar');
        /* Menyimpan data kedalam tabel */
        $save_guru = new \App\Models\Guru;
        $save_guru->nama = $nama;
        $save_guru->mengajar = $mengajar;
        $save_guru->save();
        return redirect('guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('guru_edit',['data' => $guru]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $data = $request->all();

        $guru->update($data);

        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('guru.index');
    }
}