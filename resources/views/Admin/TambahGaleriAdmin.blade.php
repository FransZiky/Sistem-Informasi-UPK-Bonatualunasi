@extends('layouts.layouts_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8"><div class="card">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data"  action="{{url('/GaleriPost')}}">
            @csrf
                <center><h4 class="mt-2"><b>FORM TAMBAH GALERI</b></h4></center> <br> 
                <div class="form-group row">
                    <label for="judul_galeri" class="col-md-4 col-form-label text-md-right">Judul Galeri</label> 
                    <div class="col-md-6">
                        <input id="judul_galeri" type="text" placeholder="Judul Galeri" name="judul_galeri" value="" required="required" autocomplete="judul_galeri" autofocus="autofocus" class="form-control ">
                    </div>
                </div>
                <br> 
                <div class="form-group row">
                    <label for="subjudul_galeri" class="col-md-4 col-form-label text-md-right">Sub Judul Galeri</label> 
                        <div class="col-md-6">
                            <input id="subjudul_galeri" placeholder="Sub Judul Galeri" type="text" name="subjudul_galeri" value="" required="required" autocomplete="subjudul_galeri" class="form-control ">
                        </div>
                </div> 
                <br>
                <div class="form-group row">
                    <label for="gambar_galeri" class="col-md-4 col-form-label text-md-right">Gambar Galeri</label>
                    <div class="col-md-6">
                        <input type="file" accept=".jpg,.jpeg,.img,.png" id="gambar_galeri" name="gambar_galeri">
                    </div> 
                </div> 
                <br>
                <div class="form-group row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                    <button onclick="allert()" type="submit" class="btn btn-success btn-md" style="float: left; margin-left:50px" role="button" aria-pressed="true">SIMPAN</button>
                     <a class="btn btn-danger btn-md" type="reset" style="float: left; margin-left:50px;" href="/GaleriAdmin"  name="Cancel" >BATAL</a>
						<br>
				</div>
                </div> 
        </form>
    </div>
    </div>
</div>
</div>
<br>
</div>
@endsection