<html>
<header>
<title> Data Buku </title>
<br><a href="{{url('/menu')}}">Menu</a></br>
<br><a href="{{url('/perpus')}}">Lihat Data Buku/SELECT</a></br>
<br><a href="{{url('/pinjam')}}">Data Pinjam/SELECT WHERE</a></br>


</header>

<body>
 
	<table border="1">
		<tr>
			<th>kode_buku</th>
			<th>kode_kategori</th>
			<th>kode_penerbit</th>
			<th>judul_buku</th>
			<th>jumlah_buku</th>
			<th>pengarang_buku</th>
			<th>tahun_terbit</th>
		</tr>
		@foreach ($ms_buku as $bk)
		<tr>
			<td>{{$bk->kode_buku}}</td>
			<td>{{$bk->kode_kategori}}</td>
			<td>{{$bk->kode_penerbit}}</td>
			<td>{{$bk->judul_buku}}</td>
			<td>{{$bk->jumlah_buku}}</td>
			<td>{{$bk->pengarang_buku}}</td>
			<td>{{$bk->tahun_terbit_buku}}</td>
		</tr>
		@endforeach
	</table>
			
</body>
</html>
                 
              
        