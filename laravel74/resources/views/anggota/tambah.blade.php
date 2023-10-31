<form action="/anggota/masukan" method="POST">
    @csrf
    <input type="text" name="id_anggota" placeholder="id_anggota"><br>
    <input type="text" name="kode_anggota" placeholder="kode_anggota"><br>
    <input type="text" name="nama_anggota" placeholder="nama_anggota"><br>
    <input type="text" name="jk_anggota" placeholder="jk_anggota"><br>
    <input type="text" name="jurusan_anggota" placeholder="jurusan_anggota"><br>
    <input type="text" name="no_telp_anggota" placeholder="no_telp_anggota"><br>
    <input type="text" name="alamat_anggota" placeholder="alamat_anggota"><br>
    <input type="submit" name="submit" value="KIRIM DATA">
</form>