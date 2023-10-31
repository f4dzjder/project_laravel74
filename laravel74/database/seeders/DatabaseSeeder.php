<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\anggota;
use App\Models\petugas;
use App\Models\buku;
use App\Models\rak;
use App\Models\pengembalian;
use App\Models\peminjaman;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    


        
    /*seedernya jadiin komen aja gak sih
        anggota::create([
        'id_anggota'=>123,
        'kode_anggota'=>'',
        'nama_anggota'=>'fad',
        'jk_anggota'=>'laki-laki',
        'jurusan_anggota'=>'pplg',
        'no_telp_anggota'=>'081197383721',
        'alamat_anggota'=>'kastim',
    ]);

    petugas::create([
        'id_petugas'=>123,
        'nama_petugas'=>'fadz',
        'jabatan_petugas'=>'frreee',
        'no_telp_petugas'=>'087128128271',
        'alamat_petugas'=>'balung',
    ]);

    buku::create([
        'id_buku'=>123,
        'kode_buku'=>'p',
        'judul_buku'=>'jadul',
        'penulis_buku'=>'anonimos',
        'penerbit_buku'=>'wahyu',
        'tahun_penerbit'=>2024,
        'stok'=>33,
    ]);

    rak::create([
        'id_rak'=>11,
        'nama_rak'=>'ytta',
        'lokasi_rak'=>'ytaa',
        'id_buku'=>123,
    ]);

    pengembalian::create([
        'id_pengembalian'=>123,
        'tanggal_pengembalian'=>231123,
        'denda'=>1233,
        'id_buku'=>123,
        'id_anggota'=>123,
        'id_petugas'=>123,
    ]);

    peminjaman::create([
        'id_peminjaman'=>123,
        'tanggal_pinjam'=>231211,
        'tanggal_kembali'=>231212,
        'id_buku'=>123,
        'id_anggota'=>123,
        'id_petugas'=>123,
    ]);

    */
    
   
   
    

    }
}
