@extends('layouts.main')

@section('content-header')

@endsection

@section('content-main')
       <div class="card">
    <h4><a href="{{URL('laporanP/tambah')}}">Tambah +</h4>
                    
<center><h3 class="text-primary mb-3">DAFTAR Laporan Parkir</h3></center>
<table class="table table-bordered table-hover" align="center">
   <thead class="table-dark">
      <tr>
      <th>No</th>
      <th>STNK</th>
      <th>Kondisi</th>
      <th>Mall</th>
      <th>Parkiran</th>
      <th>Masuk</th>
      <th>Keluar</th>
      <th>Aksi</th>
      </tr>
</thead>

<?php $no=1; ?>
@foreach ($data as $dataP)
<tr>
<td>{{$no++}}</td>
<td>{{$dataP->stnk}}</td>
<td>{{$dataP->kondisi}}</td>
<td>{{$dataP->mall}}</td>
<td>{{$dataP->jenis_parkir}}</td>
<td>{{$dataP->masuk}}</td>
<td>{{$dataP->keluar}} -</td>
     <td>
  <a href="/user/delete/{{$dataP->id}}" onclick="return confirm('Admin Yakin ingin menghapusnya?');"><button class="btn btn-danger">Hapus</button></a>
  <a href="/user/edit/{{$dataP->id}}"><button class="btn btn-warning">Edit</button></a>
     </td>
                       
</tr>
@endforeach
</tbody>
</table>
</div>
      </div>
@endsection