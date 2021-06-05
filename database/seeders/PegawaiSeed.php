<?php

namespace Database\Seeders;

use App\Models\anggota;
use App\Models\buku;
use App\Models\kategori;
use App\Models\Pegawai;
use App\Models\petugas;
use App\Models\pinjam;
use Illuminate\Database\Seeder;

class PegawaiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = new anggota();
        $anggota->anggota_nama = "mafud";
        $anggota->anggota_alamat = "jl. disini";
        $anggota->anggota_jk = "L";
        $anggota->anggota_telp = "0222";
        $anggota->save();

        $buku = new buku();
        $buku->buku_judul = "buku baru";
        $buku->kategori_id = "1";
        $buku->buku_deskripsi = "buku baru disini";
        $buku->buku_jumlah = "20";
        $buku->buku_cover = "glossy";
        $buku->save();

        $kategori = new kategori();
        $kategori->kategori_nama = "sejarah";
        $kategori->save();

        $petugas = new petugas();
        $petugas->petugas_nama = "ani";
        $petugas->username = "ani";
        $petugas->password = "ani";
        $petugas->save();

        $pinjam = new pinjam();
        $pinjam->buku_id = "1";
        $pinjam->anggota_id = "1";
        $pinjam->tgl_pinjam = "2021-06-01";
        $pinjam->tgl_jatuh_tempo = "2021-06-08";
        $pinjam->save();
    }
}
