@extends('layouts.layouts_pegawai')
@section('content')
<title>Perangkingan pada Pengajuan</title>
	<style type="text/css">
	/* Table */
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;

		}
		.col-md-12 {
			border-collapse: collapse;
			font-size: 13px;
		}
		.col-md-12 th, 
		.col-md-12 td {
			border-bottom: 1px solid #A89E9E;
			border-left: 1px solid #A89E9E;
			padding: 7px 17px;
		}
		.col-md-12 th, 
		.col-md-12 td:last-child {
			border-right: 1px solid #A89E9E;
		}
		.col-md-12 td:first-child {
			border-top: 1px solid #A89E9E;
		}
		.col-md-12 td:last-child{
			border-bottom: 0;
		}
		caption {
			caption-side: top;
			margin-bottom: 10px;
		}
		
		/* Table Header */
		.col-md-12 thead th {
			background-color: #A89E9E;
			color: #FFFFFF;
			border-color: #A89E9E !important;
			text-transform: uppercase;
		}
		
		/* Table Body */
		.col-md-12 tbody td {
			color: #353535;
		}
		
		.col-md-12 tbody tr:nth-child(odd) td {
			background-color: #EDE2E2;
		}
		
	</style>
<div style="overflow-x:auto;">
<table class="col-md-12">
	<h2 style="margin-left: 15px;"><b>PENGAJUAN</h2>
			<br>
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nama</th>
				<th scope="col">Alamat</th>
				<th scope="col">Email</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Jumlah Pengajuan Peminjaman</th>
				<th scope="col">Foto KTP</th>
				<th scope="col">Foto Surat<br>Keterangan Desa</th>
				<th scope="col">Jenis Peminjaman</th>
				<th scope="col">Proposal</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1;?>
			@foreach($pengajuans as $pengajuan)
			<tr>
				<td data-header="ID" class="title">{{$i}}</td>
				<td data-header="Nama" >{{$pengajuan->nama}}</td>
				<td data-header="Alamat" >{{$pengajuan->alamat}}</td>
				<td data-header="Email" >{{$pengajuan->email}}</td>
				<td data-header="Jenis Kelamin" >{{$pengajuan->jenis_kelamin}}</td>
				<td data-header="Tanggal Lahir" class="title">{{$pengajuan->tanggal_lahir}}</td>
				<td data-header="Jumlah Pengajuan Peminjaman" >{{$pengajuan->jumlahpengajuanpeminjaman}}</td>
				<td data-header="Foto KTP" ><img width="150px" height="100px" src="/file/ktp/{{$pengajuan->foto_ktp}}" alt=""></td>
				<td data-header="Foto Surat Keterangan Desa" ><img width="150px" height="100px" src="/file/keterangan/{{$pengajuan->foto_keterangan}}" alt=""> </td>
				<td data-header="Jenis Peminjaman" >{{$pengajuan->jenis_peminjaman}}</td>

				<td data-header="Proposal"><center><embed type="application/pdf" src="/file/proposal/{{$pengajuan->proposal}}" width="150px" height="100px"></embed>
					<br><br><a href="/file/proposal/{{$pengajuan->proposal}}" download  class="btn btn-sm btn-info">Download</a></center> </td>
				<td data-header="Aksi">
				<button style="background-color: #F4A100">
					<a href="/pengajuan/mail/{{$pengajuan->id}}" class="perangkingan" style="color: #ffffff;">Terima</a></button>
			</tr>
			<?php $i++;?>
			@endforeach
			
		</tbody>
	</table>
</div>
	<br>
</div>
</div>
@endsection