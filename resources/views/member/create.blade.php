@extends('adminlte::page')

@section('title', 'Tambah Member')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Member</h1>
@stop

@section('content')
    <form action="{{route('member.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputName">Kode Member</label>
                            <input type="text" class="form-control @error('kode_member') is-invalid @enderror" id="exampleInputName" placeholder="kode member" name="kode_member" value="{{old('kode_member')}}">
                            @error('kode_member') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="nama_lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                            @error('nama_lengkap') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat" value="{{old('alamat')}}">
                            @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('member.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
