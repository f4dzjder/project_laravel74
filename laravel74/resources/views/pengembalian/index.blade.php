<h1 align=center>Tabel Pengembalian</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>


<table border='1'align=center>
    
    <tr>
        <td>ID Pengembalian</td>
        <td>Tanggal Pengembalian</td>
        <td>Denda</td>
        <td>ID Buku</td>
        <td>ID Anggota</td>
        <td>ID Petugas</td>
        
        <td>edit</td>
        <td>delete</td>
        
    </tr>
    @foreach ($pengembalian as $a)
    <tr>
        <td>{{$a->id_pengembalian}}</td>
        <td>{{$a->tanggal_pengembalian}}</td>
        <td>{{$a->denda}}</td>
        <td>{{$a->id_buku}}</td>
        <td>{{$a->id_anggota}}</td>
        <td>{{$a->id_petugas}}</td>
       

        <td>
            <a href="/pengembalian/{{$a->id_pengembalian}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/pengembalian/{{$a->id_pengembalian}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>


    </tr>
    @endforeach
</table>
<a href="/pengembalian/tambah">tambah data coy</a>
{{$pengembalian->links()}}

