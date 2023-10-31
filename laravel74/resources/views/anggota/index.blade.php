<h1 align=center>Tabel Anggota</h1>

<form action="">
    <input type="text" name="keyword" placeholder="CARI DATA">
    <button>SEARCH</button>
</form>


<table border='1'align=center>
    
    <tr>
        <td>ID_Anggota</td>
        <td>kode_anggota</td>
        <td>Nama_Anggota</td>
        <td>Jenis_Kelamin_anggota</td>
        <td>Jurusan_Anggota</td>
        <td>No_Telepon_Anggota</td>
        <td>Alamat_Anggota</td>
        <td>Edit Data</td>
        <td>Hapus Data</td>
        
    </tr>
    @foreach ($anggota as $a)
    <tr>
        <td>{{$a->id_anggota}}</td>
        <td>{{$a->kode_anggota}}</td>
        <td>{{$a->nama_anggota}}</td>
        <td>{{$a->jk_anggota}}</td>
        <td>{{$a->jurusan_anggota}}</td>
        <td>{{$a->no_telp_anggota}}</td>
        <td>{{$a->alamat_anggota}}</td>

        <td>
            <a href="/anggota/{{$a->id_anggota}}/edit" type="button">edit</a>
        </td>
        <td>    
            <form action="/anggota/{{$a->id_anggota}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </td>


    </tr>
    @endforeach
</table>
<a href="/anggota/tambah">tambah data coy</a>
{{$anggota->links()}}

