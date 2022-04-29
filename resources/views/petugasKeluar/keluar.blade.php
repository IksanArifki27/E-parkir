<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Halaman Keluar data </title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/petugasKeluar">Petugas Keluar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/petugasKeluar">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/keluar">Kendaraan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
         
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
    <div class="container">
      <div class="row">
        <div class="card">
          <div class="card-body">
            <center><h3 class="text-primary mb-3">DAFTAR Kendaraan Parkir</h3></center>
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
                <th>Aksi</th>
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
                <td>
            <a href="/laporanP/delete/{{$dataP->id}}" onclick="return confirm('Apakah Anda ingin keluar ');"><button class="btn btn-info">Keluar</button></a>
                </td> 
                         {{-- <a href="/admin/keluar/delete/{{$dp->id}}/{{$dp->tempat}}" onclick="return confirm('Admin Yakin ingin mengeluarkanya?');"><button class="btn waves-effect red white-text">Keluar</button></a>        --}}
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
        {{-- <img src="/img/petugas_keluar.jpg" width="900" height="500"> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js"></script>
  </body>
</html>


