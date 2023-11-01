<h1>edit data</h1>
<form action="/buku/{{$buku->id_buku}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id_buku" placeholder="ID Buku" value={{$buku->id_buku}} disabled><br>
    <input type="text" name="kode_buku" placeholder="Kode Buku" value={{$buku->kode_buku}}><br>
    <input type="text" name="judul_buku" placeholder="Judul Buku" value={{$buku->judul_buku}}><br>
    <input type="text" name="penulis_buku" placeholder="Penulis Buku" value={{$buku->penulis_buku}}><br>
    <input type="text" name="penerbit_buku" placeholder="Penerbit Buku" value={{$buku->penerbit_buku}}><br>
    <input type="text" name="tahun_penerbit" placeholder="Tahun Penerbit" value={{$buku->tahun_penerbit}}><br>
    <input type="text" name="stok" placeholder="stok" value={{$buku->stok}}><br>
    <input type="submit" name="submit" value="update">
</form>
