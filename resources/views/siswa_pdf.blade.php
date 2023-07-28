<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Status</th>
				<th>Guru BK</th>
				<th>Jenis Layanan</th>
				<th>Deskripsi</th>
				<th>Wali Kelas</th>
				<th>Tanggal Konseling</th>
				<th>Hasil Konseling</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($jadwal as $item)
			<tr>
				<td>{{ $loop ->iteration }}</td>
				<td>{{ $item ->nama }}</td>
				<td>{{$item->status}}</td>
				<td>{{$item->guru->nama}}</td>
				<td>{{$item->layanan->jenis_layanan}}</td>
				<td>{{$item->deskripsi}}</td>
				<td>{{$item->walas->nama}}</td>
				<td>{{$item->tanggal_id}}</td>
				<td>{{$item->hasil_konseling}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>