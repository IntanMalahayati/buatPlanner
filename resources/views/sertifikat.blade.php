@extends('template/temp')

@section('title', 'Sertifikat | buatPlanner')

@section('container')
<!-- ======= sertif Section ======= -->
<section class="page-section bg-white text-dark">
  <div class="container px-4 px-lg-5">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h2 class="text-center mt-0">Pilih Templatemu</h2>
        <hr class="divider" />
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-muted mb-0">Pilih template sertifikat sesuai keinginan mu</p>
      </div>
    </div>
  </div>
  <div class="row pt-5">
      <div class="col text-center">
        <div class="icon-box">
          <a href="/formSertifikat"><img src="\assets\sertifikat\ser-ijo-fill.jpg"
            style="width:270px;height:200px;box-shadow: 5px 5px 5px #ccc;"></img></a>
        </div>
      </div>      
      <div class="col text-center">
        <div class="icon-box">
          <img src="\assets\sertifikat\Dua Warna Pengakuan Sertifikat-fill.jpg" style="width:270px;height:200px;box-shadow: 5px 5px 5px #ccc;"></img>
        </div>
      </div>      
      <div class="col text-center">
        <div class="icon-box">
          <img src="\assets\sertifikat\Hitam dan Emas Pencapaian Sertifikat-fill.jpg" style="width:270px;height:200px;box-shadow: 5px 5px 5px #ccc;"></img>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Sertif Section -->
@endsection