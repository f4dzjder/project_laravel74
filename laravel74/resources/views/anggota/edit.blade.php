<h1>edit data</h1>


<form action="/anggota/{{$anggota->id_anggota}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id_anggota" placeholder="ID ANGGOTA" value={{$anggota->id_anggota}} disabled><br>
    <input type="text" name="kode_anggota" placeholder="KODE ANGGOTA" value={{$anggota->kode_anggota}}><br>
    <input type="text" name="nama_anggota" placeholder="NAMA ANGGOTA" value={{$anggota->nama_anggota}}><br>
    <input type="text" name="jk_anggota" placeholder="JK ANGGOTA" value={{$anggota->jk_anggota}}><br>
    <input type="text" name="jurusan_anggota" placeholder="JURUSAN ANGGOTA" value={{$anggota->jurusan_anggota}}><br>
    <input type="text" name="no_telp_anggota" placeholder="NO TELP ANGGOTA" value={{$anggota->no_telp_anggota}}><br>
    <input type="text" name="alamat_anggota" placeholder="ALAMAT ANGGOTA" value={{$anggota->alamat_anggota}}><br>
    <input type="submit" name="submit" value="update">
</form>
