<h1 align=center>Tabel Buku</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>


<table border='1'align=center>
    
    <tr>
        <td>ID Buku</td>
        <td>Kode Buku</td>
        <td>Judul Buku</td>
        <td>Penulis Buku</td>
        <td>Penerbit Buku</td>
        <td>Tahun Penerbit</td>
        <td>Stok</td>
        <td>edit</td>
        <td>delete</td>
        
    </tr>
    @foreach ($buku as $a)
    <tr>
        <td>{{$a->id_buku}}</td>
        <td>{{$a->kode_buku}}</td>
        <td>{{$a->judul_buku}}</td>
        <td>{{$a->penulis_buku}}</td>
        <td>{{$a->penerbit_buku}}</td>
        <td>{{$a->tahun_penerbit}}</td>
        <td>{{$a->stok}}</td>

        <td>
            <a href="/buku/{{$a->id_buku}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/buku/{{$a->id_buku}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>


    </tr>
    @endforeach
</table>
<a href="/buku/tambah">tambah data coy</a>
{{$buku->links()}}

