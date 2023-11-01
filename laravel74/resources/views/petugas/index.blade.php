<h1 align=center>Tabel Petugas</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>

<table border='1'align=center>
    <tr>
        <td>id_petugas</td>
        <td>Nama Petugas</td>
        <td>Jabatan Petugas</td>
        <td>No Telp Petugas</td>
        <td>Alamat Petugas</td>
        <td>EDIT</td>
        <td>DELETE</td>   
    </tr>

    @foreach ($petugas as $b)
    
    <tr>
        <td>{{$b->id_petugas}}</td>
        <td>{{$b->nama_petugas}}</td>
        <td>{{$b->jabatan_petugas}}</td>
        <td>{{$b->no_telp_petugas}}</td>
        <td>{{$b->alamat_petugas}}</td>
        <td>
            <a href="/petugas/{{$b->id_petugas}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/petugas/{{$b->id_petugas}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>
    </tr>
    
    @endforeach

</table>

<a href="/petugas/tambah">tambah data coy</a>

{{$petugas->links()}}