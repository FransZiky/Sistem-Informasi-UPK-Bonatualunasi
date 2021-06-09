@extends('layouts.layouts_admin')
@section('content')
<div class="row">
    <div class="col-6">
        <div class="icons">
        </div>             
    <h3 style="margin-left:25px; margin-top:10px" >PENGUMUMAN</h3>
</div>
                
<div class="col-6">
    <button type="button" class="btn btn-success btn-md float-right"  style="margin-left:555px; width:15%" onclick="location.href='/tambah_pengumuman_admin'">TAMBAH</button>
        <br>
        <br>
        <input style="margin-left:470px;" type="text" class="float-right" placeholder="Search..">
    </div>  
</div>
<br>

<table class="table table-sripted table-bordered table-hover" style="height:100px;" border="2"> 
    <tr style="text-align:center;">
        <th>NOMOR</th>
        <th>JUDUL PENGUMUMAN</th>
        <th>TANGGAL</th>
        <th>AKSI</th>
    </tr>
    
    @foreach($pengumuman as $p)  
    <tr style="text-align:left;">
        <td style="text-align:center;">{{$p->id_pengumuman}}</td>
        <td><a href="/detail_pengumuman/{{$p->id_pengumuman}}"> {{$p->judul}}</a></td>
        <td style="text-align:center;">{{$p->tanggal}}</td>
        <td style="text-align:center;">
            <button type="button" class="btn btn-primary btn-md"  style="width:35%" onclick="location.href='/edit_pengumuman_admin/{{$p->id_pengumuman}}'">EDIT</button>
            <button type="button" class="btn btn-secondary btn-md"  style="width:35%" onclick="location.href='/hapus_pengumuman_admin/{{$p->id_pengumuman}}'">HAPUS</button>
        <br>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection