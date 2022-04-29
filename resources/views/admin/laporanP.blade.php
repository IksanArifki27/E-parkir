@extends('layouts.main')

@section('content-header')

@endsection

@section('content-main')
       <div class="card">
          <br>
     <h3><a href="{{URL('laporanP/tambah')}}"> tambah + </a></h3> 
                   
<center><h3 class="text-primary mb-3"><b> Daftar Kendaraan Parkir </b></h3></center>
<table class="table table-bordered table-hover" align="center">
   <thead class="table-dark">
      <tr>
      <th>No</th>
      <th>STNK</th>
      {{-- <th>Kondisi</th> --}}
      <th>Mall</th>
      <th>Parkiran</th>
      <th>tgl Masuk & jam</th>
      {{-- <th>Keluar</th> --}}
      {{-- <th>Aksi</th> --}}
      </tr>
</thead>

<?php $no=1; ?>
@foreach ($data as $dataP)
<tr>
<td>{{$no++}}</td>
<td>{{$dataP->stnk}}</td>
{{-- <td>{{$dataP->kondisi}}</td> --}}
<td>{{$dataP->mall}}</td>
<td>{{$dataP->jenis_parkir}}</td>
<td>{{$dataP->masuk}}</td>
 {{-- <td>{{$dataP->keluar}} -</td> --}}
    {{-- <td>
  <a href="/laporanP/delete/{{$dataP->id}}" onclick="return confirm('Admin Yakin ingin menghapusnya?');"><button class="btn btn-danger">Hapus</button></a>
  <a href="/user/edit/{{$dataP->id}}"><button class="btn btn-warning">Edit</button></a>
     </td>  --}}
                       
</tr>
@endforeach
</tbody>
</table>
</div>
      </div>
@endsection