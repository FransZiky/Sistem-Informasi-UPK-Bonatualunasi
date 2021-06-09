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
  <title>Sistem Informasi UPK Kecamatan Bonatua Lunasi</title>
    </head>
<body>  

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color: #4C7EAD"> 
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-link active" href="{{ url('/') }}">BERANDA</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('/pengajuan') }}">PENGAJUAN</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('/lowongan_kerja') }}">LOWONGAN KERJA</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('/pengumuman') }}">PENGUMUMAN</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('/masuk') }}">MASUK</a>
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
                        <center><img class="img-responsive" src="img/logo/{{$l->logo}}" width="350px"></center>
          @endforeach
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="col-md-8">
		    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
				</div>
                <center><h4 class="mt-2"><b>UPK Kecamatan Bonatua Lunasi</b></h4></center>
				<br><br><p>
						Unit Pengelola Kegiatan (UPK) adalah unit yang menjalankan kegiatan usaha berupa jasa simpan pinjam yang bertujuan memberdayakan masyarakat perdesaan secara 
                        mandiri guna pengentasan kemiskinan masyarakat sesuai amanat Program Nasional Pemberdayaan Masyarakat Mandiri Perdesaan (PNPM-MPd).  
                        UPK ini terletak pada kecamatan bonatua lunasi. 
                    </p>
          <p>
          <b>Visi</b></p>
          <p>Menjadikan UPK sebuah lembaga yang profesional dan akuntable dalam pengelolaan keuangan dan pinjaman.
          </p>
          <p>
          <b>Misi</b></p>
          <ol><li>Mengembangkan profesionalisme sumber daya manusia dalam pengelolaan kegiatan bagi kepentingan pemberdayaan masyarakat.</li>
          <li>Mengembangkan kegiatan ekonomi produktif dan peningkatan kualitas hidup masyarakat melalui pemberian manfaat nyata bagi kelompok.</li>
          <li>Terlaksananya pengelolaan keuangan dan pengelolaan pinjaman yang sehat dan transparan sesuai dengan tujuan, prinsip dan ketentuan PPK.<br></li></ol>
				</div>
			</div>
		</div>
	</div>    
</div> 
<br>
<div id="gallery" style="background-color: #DCDAD3; background-repeat:no-repeat; background-attachment: fixed; background-size:100% 100%" >
	<br>
	<center><h2>GALERI</h2>
	<br>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
  <div class="carousel-inner">
    <?php $i=0; foreach ($galeri as $row): ?>
    <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
    <div class='carousel-item <?php echo $set_; ?>'>
          <img src="{{ url('/img/galeri/'.$row->gambar_galeri)}}" class='d-block w-50'>
          <div class="carousel-caption d-none d-md-block">
        <h5>{{$row->judul_galeri}}</h5>
        <p>{{$row->subjudul_galeri}}</p>
      </div>
    </div>
    <?php $i++; endforeach ?>
    <!-- @foreach($galeri as $p)
    <div class="carousel-item active" data-bs-interval="10000">
      
      <center>
        <img src="{{ url('/img/galeri/'.$p->gambar_galeri)}}" class="d-block w-50" alt="..."></center>
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$p->judul_galeri}}</h5>
        <p>{{$p->subjudul_galeri}}</p>
      </div>
      @endforeach
    </div> -->
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</center>
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