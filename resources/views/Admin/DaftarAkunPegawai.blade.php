@extends('layouts.layouts_admin')
@section('content')
<div class="row justify-content-center">
	<div class="col-md-7">
		<div class="card">
			<div class="card-body">
                <form method="post" enctype="multipart/form-data"  action="{{url('/tambahAkunPegawaiPost')}}">
                {{ csrf_field() }}
                    <center>
                        <h4 class="mt-2"><b>DAFTAR AKUN PEGAWAI</b></h4>
                    </center>
                    <br>
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                        <div class="col-md-6">
                            <input id="username" type="text" placeholder="Username Pegawai" name="username" value="" required="required" autocomplete="username" autofocus="autofocus" class="form-control ">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                        <div class="col-md-6">
                            <input id="Password" type="password" placeholder="Password Pegawai" name="password" value="" required="required" autocomplete="password" autofocus="autofocus" class="form-control ">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-md" style="float: left;">DAFTAR AKUN</button>
                            <input type="reset" style="float: left; margin-left:20px" class="btn btn-danger btn-md" name="Cancel" value="BATAL">
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>
</div> 
@endsection