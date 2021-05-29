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
			<th>kode_peminjaman</th>
			<th>kode_buku</th>
			<th>tgl_kembali</th>
			<th>denda</th>
			<th>status_kembali</th>
		</tr>
		@foreach ($ms_detail_pinjam as $pinjam)
		<tr>
			<td>{{$pinjam->kode_peminjaman}}</td>
			<td>{{$pinjam->kode_buku}}</td>
			<td>{{$pinjam->tgl_kembali}}</td>
			<td>{{$pinjam->denda}}</td>
			<td>{{$pinjam->status_kembali}}</td>
		</tr>
		@endforeach
	</table>
			
</body>
</html>
                 
              
        