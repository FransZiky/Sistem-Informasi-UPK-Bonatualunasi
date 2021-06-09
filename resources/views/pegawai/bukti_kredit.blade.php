@extends('layouts.layouts_pegawai')
@section('content')
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
    <title>BUKTI PEMBAYARAN KWITANSI</title>
    <script>
    function printPage() {
    window.print();
}
</script>
    </head>
<body> 
<div class="row justify-content-center">
    <div class="col-md-14">
        <center><h4 class="mt-3"><b>KARTU KREDIT<br> KECAMATAN BONATUA LUNASI</b></h4></center> <br> 
        <hr />
            <input type="hidden" name="_token" value="0UMi4eBpcUrOirTQZp3tJt7g8CrKQOBAloeW7KOg"> 
                <div class="form-group row">
                    <label for="no" class="col-md-2 col-form-label text-md-right">No:</label> <div class="col-md-3">
                        <input id="no" type="text" name="no" value="" required="required" autocomplete="no" autofocus="autofocus" class="form-control ">
                    </div>
                    <label for="desa" class="col-md-2 col-form-label text-md-right">Desa:</label> 
                        <div class="col-md-3">
                            <input id="desa" type="text" name="desa" value="" required="required" autocomplete="desa" class="form-control ">
                        </div>
                </div> 
                <br>
                <h5 class="mt-2" style="margin-left: 130px"><b>KREDIT</b></h5>
                <br>
                <div class="form-group row">
                    <label for="no" class="col-md-2 col-form-label text-md-right">No. Kredit:</label> <div class="col-md-3">
                        <input id="no_kwitansi" type="text" name="no_kwitansi" value="" required="required" autocomplete="no_kwitansi" autofocus="autofocus" class="form-control ">
                    </div>
                    <label for="desa" class="col-md-2 col-form-label text-md-right">Jumlah Kredit:</label> 
                        <div class="col-md-3">
                            <input id="jumlah_kwitansi" type="text" name="jumlah_kwitansi" value="" required="required" autocomplete="jumlah_kwitansi" class="form-control ">
                        </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="suku_bunga" class="col-md-2 col-form-label text-md-right">Suku Bunga:</label> <div class="col-md-3">
                        <input id="suku_bunga" type="text" name="suku_bunga" value="2%bulan (menurun)" required="required" autocomplete="suku_bunga" autofocus="autofocus" class="form-control ">
                    </div>
                    <label for="jumlah_bunga" class="col-md-2 col-form-label text-md-right">Jumlah Bunga:</label> 
                        <div class="col-md-3">
                            <input id="jumlah_bunga" type="text" name="jumlah_bunga" value="" required="required" autocomplete="jumlah_bunga" class="form-control ">
                        </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="tanggal_pencairan" class="col-md-2 col-form-label text-md-right">Tanggal Pencairan:</label> <div class="col-md-3">
                        <input id="tanggal_pencairan" type="text" name="tanggal_pencairan" value="" required="required" autocomplete="tanggal_pencairan" autofocus="autofocus" class="form-control ">
                    </div>
                    <label for="jangka_waktu" class="col-md-2 col-form-label text-md-right">Jangka Waktu:</label> 
                        <div class="col-md-3">
                            <input id="jangka_waktu" type="text" name="jangka_waktu" value="12 Bulan" required="required" autocomplete="jangka_waktu" class="form-control ">
                        </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="tanggal_pelunasan" class="col-md-2 col-form-label text-md-right">Tanggal Pelunasan:</label> <div class="col-md-3">
                        <input id="tanggal_pelunasan" type="text" name="tanggal_pelunasan" value="" required="required" autocomplete="tanggal_pelunasan" autofocus="autofocus" class="form-control ">
                    </div>
                    <label for="angsuran" class="col-md-2 col-form-label text-md-right">12 Kali Angsuran:</label> 
                        <div class="col-md-3">
                            <input id="angsuran" type="text" name="angsuran" value="Setiap Bulan" required="required" autocomplete="angsuran" class="form-control ">
                        </div>
                </div>
            </div>
        </div>
    </body>
                <hr> 
                <center><h4 class="mt-2"><b>KEWAJIBAN MEMBAYAR BUNGA DAN ANGSURAN POKOK KREDIT</b></h4></center> <br> 
                <br>
                <html lang="en">
    
                <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
    <style>
        table {
            border-collapse: collapse;

        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
            color: black;
        }
        th {
            background-color: #C4C4C4;
            color: black;
            
        }
    </style>
</head>
<body>
    <table class="col-md-12">
        <tr>
            <th>BULAN</th>
            <th>TANGGAL</th>
            <th>POKOK</th>
            <th>KUMULATIF</th>
            <th>BUNGA</th>
            <th>KUMULATIF</th>
            <th>BULAN</th>
            <th>TANGGAL</th>
            <th>POKOK</th>
            <th>KUMULATIF</th>
            <th>BUNGA</th>
            <th>KUMULATIF</th>
        </tr>
        <tr>
            <th>I</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th>VII</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
        </tr>
        <tr>
            <th>II</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th>VIII</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
        </tr>
        <tr>
            <th>III</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th>IX</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
        </tr>
        <tr>
            <th>IV</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th>X</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
        </tr>
        <tr>
            <th>V</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th>XI</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
        </tr>
        <tr>
            <th>VI</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th>XII</th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>

        </tr>
    </table>
</body>
</html>
<br>
<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-6">
        <input class="btn btn-primary btn-md" type="button" style="float: right; background-color: grey; width: 20%" value="CETAK" onclick="printPage()" />
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
</div>
@endsection
