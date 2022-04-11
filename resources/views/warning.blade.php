
@include('layouts.inc.inc-css')
<section class="content">
      <div class="error-page">
        <h2 class="headline text-danger">404</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Alamat URL mu salah!!!</h3>

          <p>
            anda bisa mengganti URL dengan localhost:8000/admin atau klik link dibawah ini
             <a href="/login">Kembali kehalaman admin </a> WEB E-parkir
          </p>
          <div class="kangParkir">
              <img src="/img/petugas_out.jpg" height="300" width="450">
          </div>
          
        </div>
      </div>
      <!-- /.error-page -->

    </section>
    @include('layouts.inc.inc-js')