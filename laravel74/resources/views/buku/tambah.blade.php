<form action="/buku/masukan" method="POST">
    @csrf
    <input type="text" name="id_buku" placeholder="id_buku"><br>
    <input type="text" name="kode_buku" placeholder="kode_buku"><br>
    <input type="text" name="judul_buku" placeholder="judul_buku"><br>
    <input type="text" name="penulis_buku" placeholder="penulis_buku"><br>
    <input type="text" name="penerbit_buku" placeholder="penerbit_buku"><br>
    <input type="text" name="tahun_penerbit" placeholder="tahun_penerbit"><br>
    <input type="text" name="stok" placeholder="stok"><br>
    <input type="submit" name="submit" value="KIRIM DATA">
</form>