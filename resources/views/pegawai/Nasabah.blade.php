@extends('layouts.layouts_pegawai') 
@section('content')
<div class="row">
	<div class="col-6">
		<div class="icons">
            <img class="img-responsive" src="{{asset('img/Slider/nasabah.png')}}" width="100px" style="margin-left:35px">
        </div>   
		<h3 style="margin-left:25px; margin-top:10px">NASABAH</h3>
	</div>
	<div class="col-6">
		<br>
		<br>
		<button type="button" class="btn btn-success btn-md float-right" style="margin-left:555px; width:15%" onclick="location.href='/tambah_nasabah'">TAMBAH</button>
		<br>
		<br>
		<form action="/Nasabah/cari" method="get">
            <input type="text" name="cari" class="float-right" placeholder="Search..">
        </form>
	</div>
</div>
<br>
<div style="overflow-x:auto;">
    <table class="table table-hover" style="height:100px;" border="2">
        <tr style="text-align:center;">
            <th>ID</th>
            <th>NAMA NASABAH</th>
            <th>NOMOR KWITANSI</th>
            <th>NOMOR KREDIT</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>JENIS PEMINJAMAN</th>
            <th>JUMLAH PEMINJAMAN</th>
            <th>TANGGAL PEMINJAMAN</th>
            <th>TANGGAL PENCAIRAN</th>
            <th>TANGGAL PEMBAYARAN</th>
            <th>AKSI</th>
        </tr>
        <?php $i=1;?>
        @foreach($nasabahs as $nasabah)
        <tr style="text-align:center;">
            <td>{{$i}}</td>
            <td>{{$nasabah->nama}}</td>
            <td>{{$nasabah->nomorkwitansi}}</td>
            <td>{{$nasabah->nomorkredit}}</td>
            <td>{{$nasabah->alamat}}</td>
            <td>{{$nasabah->jenis_kelamin}}</td>
            <td>{{$nasabah->jenis_peminjaman}}</td>
            <td>{{$nasabah->jumlah_peminjaman}}</td>
            <td>{{$nasabah->tanggal_peminjaman}}</td>
            <td>{{$nasabah->tanggal_pencairan}}</td>
            <td>{{$nasabah->tanggal_pembayaran}}</td>  
            <td>
                <a type="button" class="btn btn-primary btn-md" style="width: 100%" href="{{url('edit_nasabah',$nasabah->id)}}">EDIT</a>
                <br>
                <br>
                <a type="button" onclick="return confirm('Apakah anda yakin menghapus data berikut?');" class="btn btn-secondary btn-md " style="width: 100%" href="{{url('hapus_nasabah',$nasabah->id)}}">HAPUS</a>
                <br>
            </td>     
        </tr>
        <?php $i++;?>
        @endforeach
    </table>
</div>
</div>
@endsection