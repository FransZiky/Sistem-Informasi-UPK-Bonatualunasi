@extends('layouts.layouts_admin')
@section('content')
<div class="col-6">

        <button type="button" onclick="location.href='/tambah_galeri_admin'" class="btn btn-success btn-md float-left" style="margin-left:100px;">TAMBAH GALERI</button>
        <br>
    </div>  
</div> 
<br>

<table class="table table-sripted table-bordered table-hover" style="height:100px;" border="2">
	<tr style="text-align:center;">
		<th>JUDUL</th>
		<th>SUB JUDUL</th>
		<th>FOTO</th>
		<th>AKSI</th>
	</tr>
	@foreach($galeris as $galeri)
	<tr style="text-align:center;">
		
	<th>{{$galeri->judul_galeri}}</th>
	<th>{{$galeri->subjudul_galeri}}</th>
	<th>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihat{{$galeri->id}}">
		Lihat Foto</button>
	</th>
	<th>
		<a type="button" class="btn btn-primary btn-md"  style="width:35%" href="{{url('/edit_galeri_admin',$galeri->id) }}">EDIT</a>
    <a type="button" class="btn btn-secondary btn-md" style="width:35%" href="/galeri/hapus/{{$galeri->id}}" onclick="return confirm('Apakah anda yakin menghapusnya?');">HAPUS</a>
		</th>
	</tr>
	@endforeach
</table>
</div>
@foreach($galeris as $galeri)
<!-- Modal -->
<div class="modal fade" id="lihat{{$galeri->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/galeri/{{$galeri->gambar_galeri}}" width="100%" height="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- end of modal -->
@endsection