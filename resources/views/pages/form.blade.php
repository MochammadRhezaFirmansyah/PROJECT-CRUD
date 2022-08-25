@extends('layouts.master')

@section('Judul','XII RPL 2')

@section('form')
<form action="/simpanData" method="POST">
  @csrf
  @if ($message = Session::get('sukses'))
  
  <div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert">X</button>
  </div>
     
  @endif
    <div class="form-group">
      <label for="exampleInputEmail1">NIS</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIS" name="nis">
      @if ($errors->has('nis'))
      <div class="class">
         {{$errors->first('nis')}}
      </div>
      @endif
      <small id="emailHelp" class="form-text text-muted">Wajib diisi.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nama Siswa</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan nama" name="nama">
      @if ($errors->has('nama'))
      <div class="class">
         {{$errors->first('nama')}}
      </div>
      @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukan tanggal lahir anda" name="tglLahir">
        @if ($errors->has('tglLahir'))
        <div class="class">
           {{$errors->first('tglLahir')}}
        </div>
        @endif
      </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection