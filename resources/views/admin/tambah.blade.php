@extends('layouts.main')

@section('content-header')

@endsection

@section('content-main')
       <div class="card">
        <div class="container">
        <center><h3 class="text-primary mb-5">TAMBAH DATA</h3></center>
        <form  method="get" action="/laporanP/add_user">
        <div class="mb-3">
            <label for="stnk" class="form-label">Plat STNK : </label>
            <input type="text" name="stnk" class="form-control" id="stnk" required>
        </div>
        <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
    </div>
      </div>
@endsection