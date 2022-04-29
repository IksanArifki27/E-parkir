<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <title>Halaman Petugas Ruang</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/petugasRuang">Petugas Ruang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/petugasRuang">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/logout">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="col-8 justify-content-center">
        <center><h3 class="text-primary mb-5">EDIT Parkiran</h3></center>
        <form  method="get" action="/editKendaran">
        <div class="mb-3">
            <label for="stnk" class="form-label">Plat STNK : </label>
            <input type="text" name="stnk" class="form-control" id="stnk" value="{{$stnk}}" >
            <input type="hidden" name="id_dp" class="form-control" id="id_dp" value="{{$id_dp}}" >
        </div>
          <div class="mb-3">
            <label for="stnk" class="form-label">tempat Parkir : </label>
            <select name="tp_id" id="tp_id">
                @foreach($tempat_parkir as $tp)
                <option value="{{$tp->id}}">{{$tp->id_parkiran}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div>
      </div>

</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>