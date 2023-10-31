<form action="/petugas/masukan" method="POST">
    @csrf
    <input type="text" name="id_petugas" placeholder="id_petugas"><br>
    <input type="text" name="nama_petugas" placeholder="nama_petugas"><br>
    <input type="text" name="jabatan_petugas" placeholder="jabatan_petugas"><br>
    <input type="text" name="no_telp_petugas" placeholder="no_telp_petugas"><br>
    <input type="text" name="alamat_petugas" placeholder="alamat_petugas"><br>
    <input type="submit" name="submit" value="KIRIM DATA">
</form>