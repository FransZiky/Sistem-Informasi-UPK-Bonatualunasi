@extends('layouts.layouts_pegawai')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <h4>FORM TERIMA PENGAJUAN</h4>
                <p>PENGAJUAN PEMINJAMAN UPK</p>

                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif

                <form action="" method="post">

                    {{ csrf_field() }}
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="you name" value="{{$data->nama}}" />
                    <br>
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="you email address" value="{{$data->email}}"/>
                    <br>
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>
                    <br>
                    <button class="btn btn-success btn-block">Send</button>
                <form>
            </div>
        </div>
    </div>
</div>
@endsection