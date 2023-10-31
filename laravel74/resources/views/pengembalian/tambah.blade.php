<form action="/pengembalian/masukan" method="POST">
    @csrf
    <input type="text" name="id_pengembalian" placeholder="id_pengembalian"><br>
    <input type="text" name="tanggal_pengembalian" placeholder="tanggal_pengembalian"><br>
    <input type="text" name="denda" placeholder="denda"><br>
    <input type="text" name="id_buku" placeholder="id_buku"><br>
    <input type="text" name="id_anggota" placeholder="id_anggota"><br>
    <input type="text" name="id_petugas" placeholder="id_petugas"><br>

    <input type="submit" name="submit" value="KIRIM DATA">
</form>