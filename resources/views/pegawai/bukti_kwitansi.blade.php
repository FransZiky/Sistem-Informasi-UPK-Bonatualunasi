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
    <div class="col-md-9">
        <center><h4 class="mt-3">
            <b>UPK BONATUA LUNASI<br> BUKTI KWITANSI</b></h4>
        <hr/>
            <center><input type="hidden" name="_token" value="0UMi4eBpcUrOirTQZp3tJt7g8CrKQOBAloeW7KOg">
                <div class="form-group row">
                    <label for="nomorkwitansi" class="col-md-4 col-form-label text-md-right">Nomor Kwitansi</label> 
                    <div class="col-md-4">
                        <input id="no" type="text" name="nomorkwitansi" value="" required="required" autocomplete="no" autofocus="autofocus" class="form-control ">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="tanggal_kwitansi" class="col-md-4 col-form-label text-md-right">Tanggal</label> 
                    <div class="col-md-4">
                        <input id="no_kwitansi" type="text" name="no_kwitansi" value="" required="required" autocomplete="no_kwitansi" autofocus="autofocus" class="form-control ">
                    </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="jumlah_kwitansi" class="col-md-4 col-form-label text-md-right">Jumlah</label> 
                    <div class="col-md-4">
                        <input id="jumlah_kwitansi" type="text" name="jumlah_kwitansi" required="required" autocomplete="jumlah_kwitansi" autofocus="autofocus" class="form-control ">
                    </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="jenis_pembayaran" class="col-md-4 col-form-label text-md-right">Untuk Pembayaran</label> 
                    <div class="col-md-4">
                        <select required class="custom-select mr-sm-2" name="jenis_peminjaman" id="inlineFormCustomSelect">
                            <option value="" hidden selected>-- Pembayaran --</option>
                            <option value="Cicilan 1">Cicilan 1</option>
                            <option value="Cicilan 2">Cicilan 2</option>
                            <option value="Cicilan 3">Cicilan 3</option>
                            <option value="Cicilan 4">Cicilan 4</option>
                            <option value="Cicilan 5">Cicilan 5</option>
                            <option value="Cicilan 6">Cicilan 6</option>
                            <option value="Cicilan 7">Cicilan 7</option>
                            <option value="Cicilan 8">Cicilan 8</option>
                            <option value="Cicilan 9">Cicilan 9</option>
                            <option value="Cicilan 10">Cicilan 10</option>
                            <option value="Cicilan 11">Cicilan 11</option>
                            <option value="Cicilan 12">Cicilan 12</option>
                        </select>
                    </div>
                </div> 
                <br>
                <div class="form-group row">
                    <div class="col-md-8">
                    <input class="btn btn-primary btn-md" type="button" style="float: right; background-color: green;" value="CETAK" onclick="printPage()" />
                    </div>
                </div>
                </div>
            </div>
            </center>
        </div>
        </div>
</body>
</html>

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
