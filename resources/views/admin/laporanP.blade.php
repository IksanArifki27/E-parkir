@extends('layouts.main')

@section('content-header')

@endsection

@section('content-main')
       <div class="card ">
          <br>
          <div>
             <a href="{{URL('laporanP/tambah')}}" class="btn btn-primary mx-2"> tambah ➕</a>

          </div>
                   
<h3 class="text-primary mb-3 mx-auto text-bold"><b> Daftar Kendaraan Parkir </b></h3>
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

<td>{{$dataP->mall}}</td>
<td>{{$dataP->jenis_parkir}}</td>
<td>{{$dataP->masuk}}</td>

                       
</tr>
@endforeach
</tbody>
</table>
</div>
      </div>
@endsection