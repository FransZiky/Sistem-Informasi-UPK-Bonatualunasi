<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.navbar-nav {
    font-family: 'Roboto';
	text-align: justify;
    line-height: 24px;
    font-size: 15px;
    color: #000000;
    font-weight: 400;
    border: 0;
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.inner-footer{
	font-family: 'Roboto';
	text-align: justify;
    line-height: 24px;
    font-size: 15px;
    color: #000000;
    font-weight: 400;
    border: 0;
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
	</style>
	<title>LOGIN</title>
    </head>
<body>
 @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
			@endif
			@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color: #4C7EAD"> 
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-link" style="bottom-right:10px" href="/">BERANDA</a>
            <a class="nav-link" style="bottom-right:10px" href="/pengajuan">PENGAJUAN</a>
            <a class="nav-link" style="bottom-right:10px" href="/lowongan_kerja">LOWONGAN KERJA</a>
            <a class="nav-link" style="bottom-right:10px" href="/pengumuman">PENGUMUMAN</a>
            <a class="nav-link active" style="bottom-right:10px" href="/masuk">MASUK</a>
        </div>
        </div>
    </div>
    </div>
</nav>

<br>
<div class="container">
	<div class="row">
		<div class="col-md-4" mt-10>
			<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
				<div class="services">
					<div class="icons">
					@foreach($logos as $l)
                        <center><img class="img-responsive" src="img/logo/{{$l->logo}}" width="300px"></center>
          @endforeach
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="col-md-8">
			<div class="card-body">
				<br><br><br>
				<center><h4 class="mt-2"><b>MASUK KE AKUN</b></h4></center>
				<br>
				<form method="post" action="{{url('loginPost')}}" class="user">
                {{ csrf_field() }}
				<div class="form-group row"><label for="email" class="col-md-4 col-form-label text-md-right">Username</label> 
					<div class="col-md-6">
					<input id="username" type="text" name="username" class="form-control " required>
					</div>
				</div>
				<br> 
				<div class="form-group row"><label for="password" class="col-md-4 col-form-label text-md-right">Password</label> 
					<div class="col-md-6">
					<input id="password" type="password" name="password" required="required" autocomplete="current-password" class="form-control ">
					</div>
				</div>
				<br> 
				<div class="form-group row mb-0">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="btn btn-success btn-md" style="float: right">Login</button>
						<p></p>
						<br>
					
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>    
</div> 
<br>
<br>
<br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>

<!-- Footer -->
<footer style="background-color:#4C7EAD">
	<div class="inner-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-5 f-about"><br>
            		<center> <h5> <font color="#ffffff">WEBSITE RESMI</font></h5></center>
            		<center> <h5> <font color="#ffffff">UNIT PENGELOLA KEGIATAN (UPK)</font></h5></center>
            		<center> <h5> <font color="#ffffff">KECAMATAN BONATUA LUNASI</font></h5></center>
            		<center> <h5> <font color="#ffffff">KABUPATEN TOBASA</font></h5></center>   
				</div>
			<div class="col-md-4 f-contact">
			</div>
			<div class="col-md-3 f-contact">
				<br><h3 class="widgetheading"> <font color="#ffffff">KONTAK KAMI</font></h3>
				<h7><font color="#ffffff"><i class="fa fa-map"></i>&nbsp; Bonatua Lunasi, Porsea, Kab. Tobasa,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sumatera Utara, Indonesia</font></h7>
                    <br>
                    <h7> <font color="#ffffff"><i class="fa fa-phone"></i>&nbsp;&nbsp; 082273584843</font></h7>
				</div>
			</div>
	    </div>
	</div>
	<br>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>