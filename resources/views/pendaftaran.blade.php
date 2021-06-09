<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
    <title>DAFTAR AKUN</title>
    </head>
<body> 

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
                        <center><img class="img-responsive" src="img/Logo_UPK.jpeg" width="300px"></center>
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="col-md-8">
			<div class="card-body">
				<center><h4 class="mt-2"><b>DAFTAR AKUN</b></h4></center> <br>
						<form method="POST" action="http://127.0.0.1:8000/login">
						<input type="hidden" name="_token" value="ywO6c9o2VCwNhZJw1avxfD2RjJ5RXWMCKUDahc5k"> 

            <div class="form-group row"><label type="text" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label> 
				<div class="col-md-8">
					<input id="email" type="email" name="email" value="" required="required" autocomplete="email" autofocus="autofocus" class="form-control ">
				</div>
			</div>
            <br>
            <div class="form-group row"><label for="email" class="col-md-4 col-form-label text-md-right">Email</label> 
				<div class="col-md-8">
					<input id="email" type="email" name="email" value="" required="required" autocomplete="email" autofocus="autofocus" class="form-control ">
				</div>
			</div>
            <br>
            <div class="form-group row"><label type="text"  class="col-md-4 col-form-label text-md-right">Username</label> 
				<div class="col-md-8">
					<input id="email" type="email" name="email" value="" required="required" autocomplete="email" autofocus="autofocus" class="form-control ">
				</div>
			</div>
			<br> 
			<div class="form-group row"><label for="password" type="password"  class="col-md-4 col-form-label text-md-right">Password</label> 
				<div class="col-md-8">
					<input id="password" type="password" name="password" required="required" autocomplete="current-password" class="form-control ">
				</div>
			</div> 
            <br> 
			<div class="form-group row"><label for="password" type="password" class="col-md-4 col-form-label text-md-right">Konfirmasi Password</label> 
				<div class="col-md-8">
					<input id="password" type="password" name="password" required="required" autocomplete="current-password" class="form-control ">
				</div>
			</div> 
        </div>
		<div class="col-md-10">
			<div class="col-md-4 offset-md-10">
				<button type="submit" class="btn btn-success btn-md" style="float: right; background-color:#2724e3">Daftar</button> 
				<input type="reset"   style="float: left" class="btn btn-danger btn-md" name="Cancel" value="Batal">
			</div>
		</div>
		</form>
		</div>
	</div>    
</div> 
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
            <center>   <h4 >  <font color="#ffffff">WEBSITE RESMI</font></h4></center>
            <center>   <h4> <font color="#ffffff">UNIT PENGELOLA KEGIATAN (UPK)</font></h4></center>
            <center>   <h4> <font color="#ffffff">KECAMATAN BONATUA LUNASI</font></h4></center>
            <center>   <h4> <font color="#ffffff">KABUPATEN TOBASA</font></h4></center>
                   
				</div>
				<div class="col-md-4 f-contact">
				</div>
				<div class="col-md-3 f-contact">
					<br><h3 class="widgetheading"> <font color="#ffffff">KONTAK KAMI</font></h3>
							<h7>  <font color="#ffffff"><i class="fa fa-home"></i> Bonatua Lunasi, Porsea, Kab. Tobasa,</font></h7>
							<h7>  <font color="#ffffff">Sumatera Utara, Indonesia</font></h7>
                            <h7>  <font color="#ffffff"><i class="fa fa-phone"></i>  082273584843</font></h7>
				</div>
			</div>
	    </div>
	</div>
	<br>
</footer>
</html>