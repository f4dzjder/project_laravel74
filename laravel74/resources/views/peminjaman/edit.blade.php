<h1>edit data</h1>


<form action="/peminjaman/{{$peminjaman->id_peminjaman}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id_peminjaman" placeholder="ID Peminjaman" value={{$peminjaman->id_peminjaman}}><br>
    <input type="text" name="tanggal_pinjam" placeholder="Tanggal Pinjam" value={{$peminjaman->tanggal_pinjam}}><br>
    <input type="text" name="tanggal_kembali" placeholder="Tanggal Kembali" value={{$peminjaman->tanggal_kembali}}><br>
    <input type="text" name="id_buku" placeholder="ID Buku" value={{$peminjaman->id_buku}} disabled><br>
    <input type="text" name="id_anggota" placeholder="ID Anggota" value={{$peminjaman->id_anggota}} disabled><br>
    <input type="text" name="id_petugas" placeholder="ID Petugas" value={{$peminjaman->id_petugas}} disabled><br>
    <input type="submit" name="submit" value="update">
</form>
