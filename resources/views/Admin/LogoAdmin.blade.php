@extends('layouts.layouts_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8"><div class="card">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data"  action="{{url('/LogoPost')}}">
            @csrf
                <center><h4 class="mt-2"><b>FORM UBAH LOGO</b></h4></center> <br> 
                <div class="form-group row">
                    <label for="logo" class="col-md-4 col-form-label text-md-right">Logo UPK</label> 
                    <div class="col-md-6">
                        <input type="file" accept=".img,.jpeg,.jpg,.png,.img" id="logo" name="logo">
                    </div> 
                    </div>
                </div>
                <div class="col-md-6 offset-md-4">
                    <button onclick="allert()" type="submit" class="btn btn-success btn-md" style="float: left" role="button" aria-pressed="true">UBAH LOGO</button>
                     <a class="btn btn-danger btn-md" type="reset" style="float: left; margin-left:50px" href="/dashboard_admin"  name="Cancel" >BATAL</a>
		<br>
    </div>
		</div>	
                </form>
        </div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection