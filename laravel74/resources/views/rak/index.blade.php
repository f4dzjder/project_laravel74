<h1 align=center>Tabel Rak</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>

<table border='1'align=center>    
    <tr>
        <td>ID Rak</td>
        <td>Nama Rak</td>
        <td>Lokasi Rak</td>
        <td>ID Buku</td>
        <td>edit</td>
        <td>delete</td>
    </tr>

    @foreach ($rak as $a)
    
    <tr>
        <td>{{$a->id_rak}}</td>
        <td>{{$a->nama_rak}}</td>
        <td>{{$a->lokasi_rak}}</td>
        <td>{{$a->id_buku}}</td>
        <td>
            <a href="/rak/{{$a->id_rak}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/rak/{{$a->id_rak}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>
    </tr>
    
    @endforeach
    
</table>

<a href="/rak/tambah">tambah data coy</a>

{{$rak->links()}}

