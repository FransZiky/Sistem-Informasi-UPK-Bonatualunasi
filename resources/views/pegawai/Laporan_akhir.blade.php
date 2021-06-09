@extends('layouts.layouts_pegawai') @section('content')
<div class="row">
	<div class="col-3">
		<br>
		<h3 style="margin-left:25px">LAPORAN AKHIR</h3>
	</div>
	<div class="col-9">
		<button type="button" class="btn btn-success btn-md float-right" style="margin-left:45px; width:10%" onclick="location.href='/tambah_laporan_akhir'">TAMBAH</button>
		<br>
		<br>
		<form action="/Laporan/cari" method="get">
            <input type="text" name="cari" class="float-right" placeholder="Search..">
        </form>
	</div>
</div>
<br>
<table class="table table-hover" style="height:100px;" border="2">
	<tr style="text-align:center;">
		<th>ID</th>
		<th>PERIODE</th>
		<th>PEMASUKAN</th>
		<th>PENGELUARAN</th>
		<th>SALDO</th>
		<th>AKSI</th>
	</tr>
    <?php $i=1?> 
    @foreach($laporans as $laporan)
	<tr style="text-align:center;">
		<th>{{$i}}</th>
		<th>{{$laporan->periode}}</th>
		<th>{{$laporan->pemasukan}}</th>
		<th>{{$laporan->pengeluaran}}</th>
		<th>{{$laporan->saldo}}</th>
		<th>
                <a type="button" class="btn btn-primary btn-md" style="width:35%" href="{{url('edit_laporan_akhir',$laporan->id)}}">EDIT</a>
                <a type="button" class="btn btn-secondary btn-md" style="width:35%" href="{{url('hapus_laporan_akhir',$laporan->id)}}" onclick="return confirm('Apakah anda yakin menghapusnya?');">HAPUS</a>
			<br>
		</th>
	</tr>
    <?php $i++?> 
    @endforeach
</table>
</div>
@endsection