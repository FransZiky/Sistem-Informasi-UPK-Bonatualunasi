@extends('layouts.layouts_admin')
@section('content')
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                    <form method="post" enctype="multipart/form-data"  action="{{url('/tambah_pengumuman_adminPost/tambah/proses')}}">
                    {{ csrf_field() }}
                        <center><h4 class="mt-2"><b>FORMULIR TAMBAH PENGUMUMAN</b></h4></center> <br> 
                           <div class="form-group row">
                            <label for="judul_pengumuman" class="col-md-4 col-form-label text-md-right">Judul Pengumuman</label> 
                                <div class="col-md-6">
                                    <input id="judul_pengumuman" type="text" placeholder="Judul Pengumuman" name="judul" value="" required="required" autocomplete="name" autofocus="autofocus" class="form-control ">
                                </div>
                        </div>
                        <br> 
                        <div class="form-group row">
                            <label for="tanggal_pengumuman" class="col-md-4 col-form-label text-md-right">Tanggal Pengumuman</label> 
                                <div class="col-md-6">
                                    <input type="date" id="tanggal_pengumuman" name="tanggal_pengumuman">
                                </div>
                        </div> 
                        <br>
                        <div class="form-group row">
                            <label for="isi_pengumuman" class="col-md-4 col-form-label text-md-right">Isi Pengumuman</label> 
                                <div class="col-md-6">
                                    <textarea id="summernote" cols="42" rows="10" type="text" name="isi_pengumuman" value="" required="required" autocomplete="" class="form-control "></textarea>
                                </div>
                        </div> 
                        <br>
                        <div class="form-group row">
                            <label for="nama_pembuat" class="col-md-4 col-form-label text-md-right">Nama Pembuat</label> 
                                <div class="col-md-6">
                                    <input id="nama_pembuat" placeholder="Nama Pembuat" type="text" name="nama_pembuat" value="" required="required" autocomplete="" class="form-control ">
                                </div>
                        </div> 
                        <br> 
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6">
                            </div> 
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-md" style="float: left; margin-left:10px">TAMBAH</button>
                             <a class="btn btn-danger btn-md" type="reset" style="float: left; margin-left:50px" href="/Pengumuman_Admin"  name="Cancel" >BATAL</a>
                            </div>                        
                        </div> 
        </form>
        </div>
        </div>
        </div>
        </div>
        <br>    
        <!-- Button trigger modal -->
        </div>

@endsection
@section('scripts')
<script>
      $('#summernote').summernote({
        placeholder: 'Isi Pengumuman',
        tabsize: 2,
        height: 100
      });
    </script>
@endsection