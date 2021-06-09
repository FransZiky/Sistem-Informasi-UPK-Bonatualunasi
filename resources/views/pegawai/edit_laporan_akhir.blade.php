@extends('layouts.layouts_pegawai') 
@section('content')
<div class="row justify-content-center">
	<div class="col-md-7">
		<div class="card">
			<div class="card-body">
                <form method="post" enctype="multipart/form-data"  action="{{url('/editLaporanPost')}}">
                    {{ csrf_field() }}
					<center>
						<h4 class="mt-2"><b>EDIT LAPORAN AKHIR</b></h4>
					</center>
					<br>
                    <input type="hidden" name="id" value="{{$data->id}}">
					<div class="form-group row">
						<label for="periode" class="col-md-4 col-form-label text-md-right">Periode</label>
						<div class="col-md-6">
							<input type="date" value="{{$data->periode}}" id="periode" name="periode">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="pemasukan" class="col-md-4 col-form-label text-md-right">Pemasukan</label>
						<div class="col-md-6">
							<input id="pemasukan" type="text" placeholder="Pemasukan" name="pemasukan" value="{{$data->pemasukan}}" required="required" autocomplete="alamat" autofocus="autofocus" class="form-control ">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="pengeluaran" class="col-md-4 col-form-label text-md-right">Pengeluaran</label>
						<div class="col-md-6">
							<input id="pengeluaran" type="text" placeholder="Pengeluaran" name="pengeluaran" value="{{$data->pengeluaran}}" required="required" autocomplete="alamat" autofocus="autofocus" class="form-control ">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="saldo" class="col-md-4 col-form-label text-md-right">Saldo</label>
						<div class="col-md-6">
							<input id="saldo" type="text" placeholder="Saldo" name="saldo" value="{{$data->saldo}}" required="required" autocomplete="jenis_peminjaman" autofocus="autofocus" class="form-control ">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-md" style="float: left; margin-left:10px">EDIT</button>
                            <a class="btn btn-danger btn-md" type="reset" style="float: left; margin-left:50px" href="/Nasabah"  name="Cancel" >BATAL</a>
						</div>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
@endsection