<h1 align=center>Tabel Peminjaman</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>

<table border='1'align=center>
    
    <tr>
        <td>ID Peminjaman</td>
        <td>Tanggal Pinjam</td>
        <td>Tanggal Kembali</td>
        <td>ID Buku</td>
        <td>ID Anggota</td>
        <td>ID Petugas</td>
        <td>edit</td>
        <td>delete</td>
    </tr>

    @foreach ($peminjaman as $a)
    
    <tr>
        <td>{{$a->id_peminjaman}}</td>
        <td>{{$a->tanggal_pinjam}}</td>
        <td>{{$a->tanggal_kembali}}</td>
        <td>{{$a->id_buku}}</td>
        <td>{{$a->id_anggota}}</td>
        <td>{{$a->id_petugas}}</td>
        <td>
            <a href="/peminjaman/{{$a->id_peminjaman}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/peminjaman/{{$a->id_peminjaman}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>
    </tr>

    @endforeach

</table>

<a href="/peminjaman/tambah">tambah data coy</a>

{{$peminjaman->links()}}

