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
</head>
<body>
<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4C7EAD;
  color: white;

  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding:10px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color:#f9f9f9}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */

}
</style>
	<table class="col-md-12" >
		<h2><b>Pengajuan</h2>
			<br>
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nama</th>
				<th scope="col">Alamat</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Foto KTP</th>
				<th scope="col">Foto Surat<br>Keterangan Desa</th>
				<th scope="col">Jenis Peminjaman</th>
				<th scope="col">Proposal</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-header="ID" class="title">01</td>
				<td data-header="Nama" >Manogunawan</td>
				<td data-header="Alamat" >Bonatua Lunasi</td>
				<td data-header="Jenis Kelamin" >Laki-Laki</td>
				<td data-header="Tanggal Lahir" class="title">01 Januari 2000</td>
				<td data-header="Foto KTP" > </td>
				<td data-header="Foto Surat Keterangan Desa" > </td>
				<td data-header="Jenis Peminjaman" > </td>
				<td data-header="Proposal"> </td>
				<td data-header="Aksi">
				<button style="background-color: #F4A100"><a href="#" class="perangkingan" style="color: #ffffff;">Rangking</a></button>
				<button style="background-color: #F00202"><a href="#" class="remove" style="color: #ffffff;">Delete</a></button>
			</tr>
			<tr>
				<td data-header="ID" class="title">01</td>
				<td data-header="Nama" >Manogunawan</td>
				<td data-header="Alamat" >Bonatua Lunasi</td>
				<td data-header="Jenis Kelamin" >Laki-Laki</td>
				<td data-header="Tanggal Lahir" class="title">01 Januari 2000</td>
				<td data-header="Foto KTP" > </td>
				<td data-header="Foto Surat Keterangan Desa" > </td>
				<td data-header="Jenis Peminjaman" > </td>
				<td data-header="Proposal"> </td>
				<td data-header="Aksi">
				<button style="background-color: #F4A100"><a href="#" class="perangkingan" style="color: #ffffff;">Rangking</a></button>
				<button style="background-color: #F00202"><a href="#" class="remove" style="color: #ffffff;">Delete</a></button>
			</tr>
			<tr>
				<td data-header="ID" class="title">01</td>
				<td data-header="Nama" >Manogunawan</td>
				<td data-header="Alamat" >Bonatua Lunasi</td>
				<td data-header="Jenis Kelamin" >Laki-Laki</td>
				<td data-header="Tanggal Lahir" class="title">01 Januari 2000</td>
				<td data-header="Foto KTP" > </td>
				<td data-header="Foto Surat Keterangan Desa" > </td>
				<td data-header="Jenis Peminjaman" > </td>
				<td data-header="Proposal"> </td>
				<td data-header="Aksi">
				<button style="background-color: #F4A100"><a href="#" class="perangkingan" style="color: #ffffff;">Rangking</a></button>
				<button style="background-color: #F00202"><a href="#" class="remove" style="color: #ffffff;">Delete</a></button>
			</tr>
			<tr>
				<td data-header="ID" class="title">01</td>
				<td data-header="Nama" >Manogunawan</td>
				<td data-header="Alamat" >Bonatua Lunasi</td>
				<td data-header="Jenis Kelamin" >Laki-Laki</td>
				<td data-header="Tanggal Lahir" class="title">01 Januari 2000</td>
				<td data-header="Foto KTP" > </td>
				<td data-header="Foto Surat Keterangan Desa" > </td>
				<td data-header="Jenis Peminjaman" > </td>
				<td data-header="Proposal"> </td>
				<td data-header="Aksi">
				<button style="background-color: #F4A100"><a href="#" class="perangkingan" style="color: #ffffff;">Rangking</a></button>
				<button style="background-color: #F00202"><a href="#" class="remove" style="color: #ffffff;">Delete</a></button>
			</tr>
			<tr>
				<td data-header="ID" class="title">01</td>
				<td data-header="Nama" >Manogunawan</td>
				<td data-header="Alamat" >Bonatua Lunasi</td>
				<td data-header="Jenis Kelamin" >Laki-Laki</td>
				<td data-header="Tanggal Lahir" class="title">01 Januari 2000</td>
				<td data-header="Foto KTP" > </td>
				<td data-header="Foto Surat Keterangan Desa" > </td>
				<td data-header="Jenis Peminjaman" > </td>
				<td data-header="Proposal"> </td>
				<td data-header="Aksi">
				<button style="background-color: #F4A100"><a href="#" class="perangkingan" style="color: #ffffff;">Rangking</a></button>
				<button style="background-color: #F00202"><a href="#" class="remove" style="color: #ffffff;">Delete</a></button>
			</tr>
		</tbody>
	</table>
	<br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
<br>
</div>
@endsection