@extends('layouts.layouts_admin')
@section('content')
<div class="row">
    <div class="col-6">
        <div class="icons">
            <img class="img-responsive" src="img/Slider/Pegawai.png" width="100px" style="margin-left:35px">
		</div>             
        <h3 style="margin-left:25px; margin-top:10px" >PEGAWAI</h3>
    </div>
    <br>
    <div class="col-6">
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-success btn-md float-right"  style="margin-left:555px; width:15%" onclick="location.href='/tambah_pegawai_admin'">TAMBAH</button>
        <br>
        <br>
        <input type="text" class="float-right" placeholder="Search..">
    </div>  
</div>
<br>

<table class="table table-hover" style="height:100px;" > 
    <tr style="text-align:center;">
        <th>ID</th>
        <th>NAMA </th>
        <th>ALAMAT</th>
        <th>JENIS KELAMIN</th>
        <th>NO TELEPON</th>
        <th>FOTO</th>
        <th>AKSI</th>
    </tr>
    <tr style="text-align:center;">
        <td>1</td>
        <td>Manogunawan</td>
        <td>Medan</td>
        <td>Laki-laki</td>
        <td>081260120597</td>
        <td></td>
        <td>
            <button type="button" class="btn btn-primary btn-md"  style="width:35%" onclick="location.href='/edit_pegawai_admin'">EDIT</button>
            <button type="button" class="btn btn-secondary btn-md"  style="width:35%" onclick="location.href=''">HAPUS</button>
        <br>
        </td>
    </tr>
    <tr style="text-align:center;">
        <td>2</td>
        <td>Resqi</td>
        <td>Medan</td>
        <td>Laki-laki</td>
        <td>081260120597</td>
        <td></td>
        <td>
            <button type="button" class="btn btn-primary btn-md"  style="width:35%" onclick="location.href='/edit_pegawai_admin'">EDIT</button>
            <button type="button" class="btn btn-secondary btn-md"  style="width:35%" onclick="location.href=''">HAPUS</button>
        <br>
        </td>
    </tr>
</table>
                
</div>
@endsection