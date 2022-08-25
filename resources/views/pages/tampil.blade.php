@extends('layouts.master')

@section('Judul','XII RPL 2')

@section('Tabel')
<table class="table table-hover">
    <thead style=background-color:darkgreen>
      <tr>
        <th scope="col" style="color: #fff">No</th>
        <th scope="col" style="color: #fff">NIS</th>
        <th scope="col" style="color: #fff">Nama</th>
        <th scope="col" style="color: #fff"> Tanggal Lahir</th>
        <th scope="col" style="color: #fff">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $n=1; ?>
      @foreach($bio as $p)
      <tr>
        <th scope="row">{{$n++}}</th>
        <td>{{$p->nis}}</td>
        <td>{{$p->nama}}</td>
        <td>{{$p->tglLahir}}</td>
        <td>
            
           
            <form action="{{route('hapus',$p->id)}}" method="POST">

               @csrf
               @method('DELETE')
               <a href="/ubah/{{$p->id}}" class="btn btn-warning btn-sm">Ubah</a>
               <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            
            </form>
        </td>       
        @endforeach
      </tr>  
    </tbody>
  </table>
  @endsection