<!DOCTYPE html> 
<html>
    <head>
    <title>UPK Bonatua Lunasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <style>
    .container{
    font-family: 'Roboto';
    text-align: justify;
    line-height: 24px;
    font-size: 15px;
    color: #000000;
    font-weight: 400;
    border: 0;
    margin: 50;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.body{
    font-family: 'Noto Serif Tamil'
}
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4C7EAD;
  color: white;

  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding:10px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color:#f9f9f9}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */

}
</style>
    </head>
<body>
        
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color: #4C7EAD"> 
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-link" href="{{ url('/dashboard_admin') }}">BERANDA</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('Pegawai_Admin') }}">PEGAWAI</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('Nasabah') }}">NASABAH</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('Pendaftaran_Pegawai_Admin') }}">PENDAFTARAN PEGAWAI</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('Pengumuman_Admin') }}">PENGUMUMAN</a>
            <a class="nav-link" style="bottom-right:10px" href="{{ url('/logout') }}">  LOGOUT</a>
        </div>
        </div>
    </div>
    </div>
</nav>
         
<div class="container-fluid" style="padding:20px;"> <br>            
        @yield('content')

<!-- Footer -->
<footer  style="background-color:#4C7EAD; bottom:0;">
    <div class="inner-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 f-about"><br>
                    <center> <h5> <font color="#ffffff">WEBSITE RESMI<br>UNIT PENGELOLA KEGIATAN (UPK)</font></h5></center>
                    <center> <h5> <font color="#ffffff">KECAMATAN BONATUA LUNASI</font></h5></center>
                    <center> <h5> <font color="#ffffff">KABUPATEN TOBASA</font></h5></center>   
                </div>
            <div class="col-md-4 f-contact">
            </div>
            <div class="col-md-3 f-contact">
                <br><h3 class="widgetheading"> <font color="#ffffff">KONTAK KAMI</font></h3>
                    <h7> <font color="#ffffff"><i class="fa fa-map"></i>&nbsp; Bonatua Lunasi, Porsea, Kab. Tobasa,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sumatera Utara, Indonesia</font></h7>
                    <br>
                    <h7> <font color="#ffffff"><i class="fa fa-phone"></i>&nbsp;&nbsp; 082273584843</font></h7>
                </div>
            </div>
        </div>
    </div>
   </div>
</footer>
</html>
    @yield('scripts')
    </body>