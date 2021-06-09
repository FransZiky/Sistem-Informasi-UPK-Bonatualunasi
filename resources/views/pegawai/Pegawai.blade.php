@extends('layouts.layouts_pegawai')
@section('content')
<div class="row">
    <div class="col-6">
        <div class="icons">
            <img class="img-responsive" src="{{asset('img/Slider/Pegawai.png')}}" width="100px" style="margin-left:35px">
		</div>             
        <h3 style="margin-left:25px; margin-top:10px">
        Selamat datang, {{Session::get('username')}}</h3>
    </div>
                
    <div class="col-6">
        <br>
        <br>
        <br>
        @if(Session::get('role')== 'admin')
        <button type="button" class="btn btn-success btn-md float-right"  style="margin-left:555px; width:15%" onclick="location.href='/tambah_pegawai'">TAMBAH</button>
        @endif
        <br>
        <br>
        <form action="/Pegawai/cari" method="get">
            <input type="text" name="cari" class="float-right" placeholder="Search..">
        </form>
    </div>  
</div>
<br>

<table class="table table-hover" style="height:100px;" border="2" > 
    <tr style="text-align:center;">
        <th>ID</th>
        <th>NAMA </th>
        <th>ALAMAT</th>
        <th>JENIS KELAMIN</th>
        <th>NO TELEPON</th>
        <th>FOTO</th>
        @if(Session::get('role')== 'admin')
        <th>AKSI</th>
        @endif
    </tr>
    <?php $i=1;?>
    @foreach($pegawais as $pegawai)
    <tr style="text-align:center;">
        <td>{{$i}}</td>
        <td>{{$pegawai->nama}}</td>
        <td>{{$pegawai->alamat}}</td>
        <td>{{$pegawai->jenis_kelamin}}</td>
        <td>{{$pegawai->no_telepon}}</td>
        <td><img src="/file/pegawai/{{$pegawai->foto}}" width="80px" height="80px" alt=""></td>
        @if(Session::get('role')== 'admin')
        <td>
            @if(Session::get('role')== 'admin')
            <a  class="btn btn-primary btn-md" style="width:35%" href="{{url('edit_pegawai',$pegawai->id)}}">EDIT</a>
            <a type="button" class="btn btn-secondary btn-md"  style="width:35%" href="/Pegawai/delete/{{$pegawai->id}}" onclick="return confirm('Apakah anda yakin menghapus data berikut?');">HAPUS</a>
            @endif
        </td>
         @endif
    </tr>
    <?php $i++;?>
    @endforeach
</table>
                
</div>
@endsection