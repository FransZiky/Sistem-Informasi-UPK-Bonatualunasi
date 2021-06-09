@extends('layouts.layouts_admin')
@section('content')

<div class="row">
    <div class="col-6">
        <div class="icons">
            <img class="img-responsive" src="img/Slider/nasabah.png" width="100px" style="margin-left:45px">
        </div>             
    <h3 style="margin-left:25px; margin-top:10px" >NASABAH</h3>
</div>
                
<div class="col-6">
    <br>
    <br>
    <button type="button" class="btn btn-success btn-md float-right"  style="margin-left:555px; width:15%" onclick="location.href='/tambah_nasabah_admin'">TAMBAH</button>
        <br>
        <br>
        <form action="/Nasabah/cari" method="get">
            <input type="text" name="cari" class="float-right" placeholder="Search..">
        </form>
    </div>  
</div>
<br>

<table class="table table-hover" style="height:100px;" > 
                <tr style="text-align:center;">
                    <th>ID</th>
                    <th>NAMA </th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>JENIS PEMINJAMAN</th>
                    <th>AKSI</th> 
                </tr>
</table>

                </div>
@endsection

