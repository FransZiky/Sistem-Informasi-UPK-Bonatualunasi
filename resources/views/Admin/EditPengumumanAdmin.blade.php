@extends('layouts.layouts_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
            <form method="post" enctype="multipart/form-data"  action="{{url('/edit_pengumuman_admin/proses/'.$pengumuman->id_pengumuman)}}">
                    {{ csrf_field() }}
                <center><h4 class="mt-2"><b>FORMULIR EDIT PENGUMUMAN</b></h4></center> <br> 
<div class="form-group row">
    <label for="judul_pengumuman" class="col-md-4 col-form-label text-md-right">Judul Pengumuman</label> 
        <div class="col-md-6">
            <input id="judul_pengumuman" type="text" placeholder="Judul Pengumuman" name="judul" value="{{$pengumuman->judul}}" required="required" autocomplete="name" autofocus="autofocus" class="form-control ">
        </div>
</div>
<br> 
<div class="form-group row">
    <label for="tanggal_pengumuman" class="col-md-4 col-form-label text-md-right">Tanggal Pengumuman</label> 
        <div class="col-md-6">
            <input type="date" id="tanggal_pengumuman" name="tanggal_pengumuman" value="{{$pengumuman->tanggal}}">
        </div>
</div> 
<br>
<div class="form-group row">
    <label for="isi_pengumuman" class="col-md-4 col-form-label text-md-right">Isi Pengumuman</label> 
        <div class="col-md-6">
            <textarea id="summernote" cols="42" rows="10" type="text" name="isi_pengumuman" value="" required="required" autocomplete="" class="form-control ">{{$pengumuman->isi}}</textarea>
        </div>
</div> 
<br>
<div class="form-group row">
    <label for="nama_pembuat" class="col-md-4 col-form-label text-md-right">Nama Pembuat</label> 
        <div class="col-md-6">
            <input id="nama_pembuat" placeholder="Nama Pembuat" type="text" name="nama_pembuat" value="{{$pengumuman->nama_pembuat}}" required="required" autocomplete="" class="form-control ">
        </div>
</div> 
<br> 
<br>
<div class="form-group row">
    <div class="col-md-6">
    </div> 
<div class="col-md-6">
    <button onclick="return confirm('Apakah anda yakin mengubahnya?');" type="submit" class="btn btn-success btn-md" style="float: left; margin-left:10px">UBAH</button> 
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection