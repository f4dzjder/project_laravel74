<form action="/peminjaman/masukan" method="POST">
    @csrf
    <input type="text" name="id_peminjaman" placeholder="id_peminjaman"><br>
    <input type="text" name="tanggal_pinjam" placeholder="tanggal_pinjam"><br>
    <input type="text" name="tanggal_kembali" placeholder="tanggal_kembali"><br>
    <input type="text" name="id_buku" placeholder="id_buku"><br>
    <input type="text" name="id_anggota" placeholder="id_anggota"><br>
    <input type="text" name="id_petugas" placeholder="id_petugas"><br>

    <input type="submit" name="submit" value="KIRIM DATA">
</form>