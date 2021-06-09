@extends('layouts.layouts_pegawai') 
@section('content')
<div class="row justify-content-center">
	<div class="col-md-7">
		<div class="card">
			<div class="card-body">
                <form method="post" enctype="multipart/form-data"  action="{{url('/tambahNasabahPost')}}">
                {{ csrf_field() }}
                    <center>
                        <h4 class="mt-2"><b>TAMBAH DATA NASABAH</b></h4>
                    </center>
                    <br>
                    <div class="form-group row">
                        <label for="nomorkwitansi" class="col-md-4 col-form-label text-md-right">Nomor Kwitansi</label>
                        <div class="col-md-6">
                            <input required id="nomorkwitansi" type="text" placeholder="Nomor Kwitansi" name="nomorkwitansi" value="" autocomplete="nomorkwitansi" autofocus="autofocus" class="form-control ">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nomorkredit" class="col-md-4 col-form-label text-md-right">Nomor Kredit</label>
                        <div class="col-md-6">
                            <input required id="nomorkredit" type="text" placeholder="Nomor Kredit" name="nomorkredit" value="" autocomplete="nomorkredit" autofocus="autofocus" class="form-control ">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                        <div class="col-md-6">
                            <input required id="name" type="text" placeholder="Nama Lengkap" name="name" value="" autocomplete="name" autofocus="autofocus" class="form-control ">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                        <div class="col-md-6">
                            <input required id="alamat" placeholder="Alamat" type="text" name="alamat" value="" autocomplete="nidn" class="form-control ">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input type="radio" name="jenis_kelamin" id="pria" value="Pria" checked="checked" class="form-check-input">
                                <label for="gridRadios1" class="form-check-label">Pria</label>
                            </div>
                            <div class="form-check">
                                <input  type="radio" name="jenis_kelamin" id="wanita" value="Wanita" class="form-check-input">
                                <label for="gridRadios2" class="form-check-label">Wanita</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="jenis_pembayaran" class="col-md-4 col-form-label text-md-right">Jenis Peminjaman</label>
                        <div class="col-md-6">
                            <select required name="jenis_pembayaran" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="Individu">Individu</option>
                                <option value="Kelompok">Kelompok</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="jumlah_peminjaman" class="col-md-4 col-form-label text-md-right">Jumlah Peminjaman</label>
                        <div class="col-md-6">
                            <input required id="jumlah_peminjaman" placeholder="Jumlah Peminjaman" type="text" name="jumlah_peminjaman" value="" autocomplete="nidn" class="form-control ">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tanggal_peminjaman" class="col-md-4 col-form-label text-md-right">Tanggal Peminjaman</label>
                        <div class="col-md-6">
                            <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman">
                        </div>
                    </div> 
                    <br>
                    <div class="form-group row">
                        <label for="tanggal_pencairan" class="col-md-4 col-form-label text-md-right">Tanggal Pencairan</label>
                        <div class="col-md-6">
                            <input type="date" id="tanggal_pencairan" name="tanggal_pencairan">
                        </div>
                    </div> 
                    <br>
                    <div class="form-group row">
                        <label for="tanggal_pembayaran" class="col-md-4 col-form-label text-md-right">Tanggal Pembayaran</label>
                        <div class="col-md-6">
                            <input type="date" id="tanggal_pembayaran" name="tanggal_pembayaran">
                        </div>
                    </div> 
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-md" style="float: left; margin-left:10px">TAMBAH</button>
                            <a class="btn btn-danger btn-md" type="reset" style="float: left; margin-left:50px" href="/Nasabah"  name="Cancel" >BATAL</a>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection