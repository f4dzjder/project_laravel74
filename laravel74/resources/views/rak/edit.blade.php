<h1>edit data</h1>
<form action="/rak/{{$rak->id_rak}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id_rak" placeholder="ID Rak" value={{$rak->id_rak}}><br>
    <input type="text" name="nama_rak" placeholder="Nama Rak" value={{$rak->nama_rak}}><br>
    <input type="text" name="lokasi_rak" placeholder="Lokasi Rak" value={{$rak->lokasi_rak}}><br>
    <input type="text" name="id_buku" placeholder="ID Buku" value={{$rak->id_buku}} disabled><br>
    <input type="submit" name="submit" value="update">
</form>
