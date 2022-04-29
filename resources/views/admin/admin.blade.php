@extends('layouts.main')

@section('content-header')
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="text-center text-primary"><b> Selamat Datang Admin </b> </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
@endsection




@section('content-main')
       <div class="card">
        <div class="ms-2 card-body ">
          {{-- <img src="/img/offroad.svg" height="400px"> --}}
          <img  src="/img/navigation.svg" height="450px">
        </div>
      </div>
@endsection



