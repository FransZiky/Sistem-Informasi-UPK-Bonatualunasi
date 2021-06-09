@extends('layouts.layouts_admin')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <center><h4 class="mt-2"><b>EDIT DATA NASABAH</b></h4></center> <br> 
                <input type="hidden" name="_token" value="0UMi4eBpcUrOirTQZp3tJt7g8CrKQOBAloeW7KOg"> 
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label> 
            <div class="col-md-6">
                <input id="name" type="text" placeholder="Nama Lengkap" name="name" value="" required="required" autocomplete="name" autofocus="autofocus" class="form-control ">
            </div>
        </div>
        <br> 
        <div class="form-group row">
            <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label> 
                <div class="col-md-6">
                    <input id="alamat" placeholder="Alamat" type="text" name="alamat" value="" required="required" autocomplete="nidn" class="form-control ">
                </div>
        </div> 
        <br>
        <div class="form-group row">
            <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label> 
                <div class="col-md-8">
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" id="pria" value="pria" checked="checked" class="form-check-input"> 
                        <label for="gridRadios1" class="form-check-label">Pria</label>
                    </div> 
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" id="wanita" value="wanita" class="form-check-input"> 
                        <label for="gridRadios2" class="form-check-label">Wanita</label>
                    </div>
                </div>
        </div>
        <br> 
        <div class="form-group row">
                    <label for="jenis_pembayaran" class="col-md-4 col-form-label text-md-right">Jenis Peminjaman</label> 
                    <div class="col-md-6">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Jenis Peminjaman</option>
                            <option value="1">Pribadi</option>
                            <option value="2">Kelompok</option>
                        </select>
                    </div>
                </div> 
    <br>
    <div class="form-group row">
        <div class="col-md-6"></div> 
            <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-md" style="float: left; margin-left:30px">UBAH</button> 
                <input type="reset" style="float: left; margin-left:50px" class="btn btn-danger btn-md" name="Cancel" value="BATAL">
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