@extends('layouts.layouts_admin')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4" mt-10>
			<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
				<div class="services">
					<div class="icons">
          @foreach($logos as $l)
                        <center><img class="img-responsive" src="img/logo/{{$l->logo}}" width="350px"></center>
          @endforeach
                    <br>
						<form action="changeLogo" method="post">
							<center>
                <button type="button"  onclick="location.href='/LogoAdmin'" class="btn btn-success btn-md float-center">UBAH LOGO</button>
              </center>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="col-md-8">
		    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
				</div>
                <br><center><h4 class="mt-2"><b>UPK Kecamatan Bonatua Lunasi</b></h4></center>
				<br><p>
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
      	 <form action="changeGaleri" method="post">
      <center><button  onclick="location.href='/GaleriAdmin'" type="button" class="btn btn-success btn-md float-center">KELOLA GALERI</button></center>
    </form>
    </div>
    <br>
    </div>
</div> 
</div> 
</div> 
</div> 
<br>


@endsection