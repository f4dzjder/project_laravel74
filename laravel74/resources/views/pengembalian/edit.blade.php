<h1>edit data</h1>


<form action="/pengembalian/{{$pengembalian->id_pengembalian}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id_pengembalian" placeholder="ID Pengembalian" value={{$pengembalian->id_pengembalian}}><br>
    <input type="text" name="tanggal_pengembalian" placeholder="Tanggal Pinjam" value={{$pengembalian->tanggal_pengembalian}}><br>
    <input type="text" name="denda" placeholder="Denda" value={{$pengembalian->denda}}><br>
    <input type="text" name="id_buku" placeholder="ID Buku" value={{$pengembalian->id_buku}} disabled><br>
    <input type="text" name="id_anggota" placeholder="ID Anggota" value={{$pengembalian->id_anggota}} disabled><br>
    <input type="text" name="id_petugas" placeholder="ID Petugas" value={{$pengembalian->id_petugas}} disabled><br>
    <input type="submit" name="submit" value="update">
</form>
