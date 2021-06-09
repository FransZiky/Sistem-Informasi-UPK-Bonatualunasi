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
    <title>PENGUMUMAN</title>
    </head>
<body> 

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color: #4C7EAD"> 
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-link" style="bottom-right:10px" href="/">BERANDA</a>
            <a class="nav-link" style="bottom-right:10px" href="/pengajuan">PENGAJUAN</a>
            <a class="nav-link" style="bottom-right:10px"href="/lowongan_kerja">LOWONGAN KERJA</a>
            <a class="nav-link active" style="bottom-right:10px"href="/pengumuman">PENGUMUMAN</a>
            <a class="nav-link" style="bottom-right:10px"href="/masuk">MASUK</a>
        </div>
        </div>
    </div>
    </div>
</nav>
<br>
<div class="container" style="min-height: 440px;">
    <div class="row justify-content-center">
        <div class="col-md-8" mt-10>
            <div class="card">
                <div id="pengumuman_lowongan_pekerjaan" class="card-body">
                    <!-- GetJudul_Pengumuman -->
                    <center><h4 class="mt-2"><b>{{$pengumuman->judul}}</b></h4></center> <br>
                    <!-- Get Isi Pengumuman -->
                    <?php echo htmlspecialchars_decode($pengumuman->isi);?>
                    <!-- Get Pembuat Pengumuman -->
                    <p>{{$pengumuman->nama_pembuat}}</p>
                    <!-- Get Tanggal Pengumuman -->    
                    <p>{{$pengumuman->tanggal}}<p>    
                </div>
            </div>
        </div>
    </div>
</div>
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