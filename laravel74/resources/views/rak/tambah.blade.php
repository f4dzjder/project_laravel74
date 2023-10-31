<h1 align=center>ID BUKU HARUS SESUAI</h1>
<form action="/rak/masukan" method="POST" >
    @csrf
    <input type="text" name="id_rak" placeholder="id_rak"><br>
    <input type="text" name="nama_rak" placeholder="nama_rak"><br>
    <input type="text" name="lokasi_rak" placeholder="lokasi_rak"><br>
    <input type="text" name="id_buku" placeholder="id_buku"><br>
    <input type="submit" name="submit" value="KIRIM DATA">
</form>