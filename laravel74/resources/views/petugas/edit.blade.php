<h1>edit data</h1>
<form action="/petugas/{{$petugas->id_petugas}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id_petugas" placeholder="ID PETUGAS" value={{$petugas->id_petugas}} disabled><br>
    <input type="text" name="nama_petugas" placeholder="NAMA PETUGAS" value={{$petugas->nama_petugas}}><br>
    <input type="text" name="jabatan_petugas" placeholder="JABATAN PETUGAS" value={{$petugas->jabatan_petugas}}><br>
    <input type="text" name="no_telp_petugas" placeholder="NO TELEPON PETUGAS" value={{$petugas->no_telp_petugas}}><br>
    <input type="text" name="alamat_petugas" placeholder="ALAMAT PETUGAS" value={{$petugas->alamat_petugas}}><br>
    <input type="submit" name="submit" value="update">
</form>
