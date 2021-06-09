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
    <title>PENGAJUAN</title>
    </head>
<body> 

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color: #4C7EAD"> 
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-link" style="bottom-right:10px" href="/">BERANDA</a>
            <a class="nav-link active" style="bottom-right:10px" href="/pengajuan">PENGAJUAN</a>
            <a class="nav-link" style="bottom-right:10px"href="/lowongan_kerja">LOWONGAN KERJA</a>
            <a class="nav-link" style="bottom-right:10px"href="/pengumuman">PENGUMUMAN</a>
            <a class="nav-link" style="bottom-right:10px"href="/masuk">MASUK</a>
        </div>
        </div>
    </div>
    </div>
</nav>

<br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data"  action="{{url('/pengajuanPost')}}">
                {{ csrf_field() }}
                <center><h4 class="mt-2"><b>FORMULIR PENGAJUAN PEMINJAMAN</b></h4></center> <br> 
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label> <div class="col-md-6">
                        <input id="name" type="text" placeholder="Nama Lengkap" name="nama" value="" required="required" autocomplete="name" autofocus="autofocus" class="form-control ">
                    </div>
                </div>
                <br> 
                <div class="form-group row">
                    <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label> 
                        <div class="col-md-6">
                            <input id="alamat" placeholder="Alamat" type="text" name="alamat" value="" required="required" autocomplete="nidn" class="form-control ">
                        </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label> 
                        <div class="col-md-6">
                            <input id="email" placeholder="Alamat Email" type="text" name="email" value="" required="required" autocomplete="email" class="form-control ">
                        </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="jabatan" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label> 
                <div class="col-md-8">
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" id="pria" value="Pria" checked="checked" class="form-check-input"> 
                        <label for="gridRadios1" class="form-check-label">Pria</label>
                    </div> 
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" id="wanita" value="Wanita" class="form-check-input"> 
                        <label for="gridRadios2" class="form-check-label">Wanita</label>
                    </div>
                </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                    <div class="col-md-6">
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="jumlahpengajuanpeminjaman" class="col-md-4 col-form-label text-md-right">Jumlah Pengajuan Peminjaman</label> 
                        <div class="col-md-6">
                            <input id="jumlahpengajuanpeminjaman" placeholder="Jumlah Pengajuan Peminjaman" type="text" name="jumlahpengajuanpeminjaman" value="" required="required" autocomplete="jumlahpengajuanpeminjaman" class="form-control ">
                        </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="foto_ktp" class="col-md-4 col-form-label text-md-right">Foto KTP</label>
                    <div class="col-md-6">
                        <input type="file" id="KTP" name="ktp">
                    </div> 
                </div> 
                <br> 
                <div class="form-group row">
                    <label for="surat_desa" class="col-md-4 col-form-label text-md-right">Foto Surat Keterangan Desa</label> 
                    <div class="col-md-6">
                        <input type="file" id="keterangan_desa" name="surat_desa">
                    </div> 
                </div> 
                <br>
                <div class="form-group row">
                    <label for="jenis_pembayaran" class="col-md-4 col-form-label text-md-right">Jenis Peminjaman</label> 
                    <div class="col-md-6">
                        <select required class="custom-select mr-sm-2" name="jenis_peminjaman" id="inlineFormCustomSelect">
                            <option value="" hidden selected>-- Jenis Peminjaman --</option>
                            <option value="Individu">Individu</option>
                            <option value="Kelompok">Kelompok</option>
                        </select>
                    </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="proposal" class="col-md-4 col-form-label text-md-right">Proposal</label> 
                    <div class="col-md-6">
                        <input type="file" id="proposal" name="proposal">
                    </div> 
                </div> 
                <br>
                <div class="form-group row">
                    <label for="proposal" class="col-md-4 col-form-label text-md-right">Berikut Format Proposal</label> 
                    <div class="col-md-6">
                        <a style="width:35%;" href="{{url('pengajuan_proposal')}}">Format Proposal</a>
                    </div> 
                </div> 
					<div class="col-md-6 offset-md-4">
                    <button onclick="allert()" type="submit" class="btn btn-success btn-md" style="float: right" role="button" aria-pressed="true">Kirim</button>
						<br>
					</div>
				</div>
            </form>
        </div>
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