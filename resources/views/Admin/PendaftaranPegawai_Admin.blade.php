@extends('layouts.layouts_admin')
@section('content')

<div class="row">
    <div class="col-6">
        <div class="icons">
        </div>             
    <h3 style="margin-left:25px; margin-top:10px" >PENDAFTARAN PEGAWAI</h3>
</div>
                
<div class="col-6">
    <br>
        <input style="margin-left:460px;" type="text" class="float-right" placeholder="Search..">
    </div>  
</div>
<br>

<table class="table table-hover" style="height:100px;" border="2"> 
    <tr style="text-align:center;">
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>JENIS KELAMIN</td>
        <td>TANGGAL LAHIR</td>
        <td>IJAZAH</td>
        <td>FOTO FORMAL</td>
        <td>SURAT KETERANGAN DESA</td>
        <td>SURAT LAMARAN</td>
        <td>AKSI</td> 
    </tr>
@foreach($lowongan as $l)
    <tr style="text-align:center;">
        <td>{{$l->nama_lengkap}}</td>
        <td>{{$l->alamat}}</td>
        <td>{{$l->jenis_kelamin}}</td>
        <td>{{$l->tanggal_lahir}}</td>
        <td><img src="{{asset('/file/ktp/'.$l->ijzah)}}" width="150px" alt=""></td>
        <td><img src="{{asset('/file/keterangan/'.$l->surat_keterangan)}}" width="150px" alt=""></td>
        <td>
            <img src="{{asset('/file/foto_formal/'.$l->foto_formal)}}" width="150px" alt=""></td>
        <td>
            <embed type="application/pdf" src="{{asset('/file/surat_lamaran/'.$l->surat_lamaran)}}" width="150px" alt=""></embed>
            <br>
            <a href="/file/surat_lamaran/{{$l->surat_lamaran}}" download  class="btn btn-sm btn-info">Download</a></center> 
        </td>
        <td>
            <a type="button" class="btn btn-secondary btn-md" onclick="return confirm('Apakah anda yakin menghapusnya?');"style="width:100%" href="/Pendaftaran_Pegawai_Admin/delete/{{$l->no_pendaftar}}">HAPUS</a>
            <br>
        </td>
    </tr>
    </tr>
@endforeach
</table>
<br>
<br>
<br>
</div>
@endsection

