@extends('layouts.main')

@section('content-header')

@endsection

@section('content-main')
       <div class="card">
           <div class="container">
        <center><h3 class="text-primary mb-5">TAMBAH DATA</h3></center>
        <form  method="get" action="/user/add_user">
        <div class="mb-3">
            <label for="stnk" class="form-label">Plat STNK : </label>
            <input type="text" name="stnk" class="form-control" id="stnk" required>
        </div>
        <div class="mb-3">
            <label for="tempat_parkir" class="form-label"> Nama lengkap : </label>
            <select name="tempat_parkir" id="tempat_parkir">
                <option></option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">tambah data</button>
        </form>
    </div>
      </div>
@endsection