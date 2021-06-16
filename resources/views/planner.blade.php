@extends('template/temp')

@section('title', 'Planner | buatPlanner')

@section('container')
<!-- ======= planner Section ======= -->
<section class="page-section bg-white text-dark">
  <div class="container px-4 px-lg-5">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h2 class="text-center mt-0">Pilih Templatemu</h2>
        <hr class="divider" />
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-muted mb-5">Pilih template sertifikat sesuai keinginan mu</p>
      </div>
    </div>
  </div>
  
  <div class="container px-4 px-lg-5">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h4 class="text-center mt-5">Planner Harian</h4>
        <hr class="divider" />
      </div>
    </div>
  </div>

  <div class="row pt-3 mb-5">
    <div class="col text-center">
      <div class="icon-box">
        <a href="/formPlanner"><img src="\assets\planner\Pastel-Daily-Planner.jpg"
          style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img></a>
      </div>
    </div>
    <div class="col text-center">
      <div class="icon-box">
        <img src="\assets\planner\daily2.jpg" style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
      </div>
    </div>
    <div class="col text-center">
      <div class="icon-box">
        <img src="\assets\planner\daily3.jpg" style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
      </div>
    </div>
  </div>
  
  <div class="container px-4 px-lg-5">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h4 class="text-center mt-5">Planner Mingguan</h4>
        <hr class="divider" />
      </div>
    </div>
  </div>

  <div class="row pt-3 mb-5">
    <div class="col text-center">
      <div class="icon-box">
        <img src="\assets\planner\weekly1.jpg" style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
      </div>
    </div>
    <div class="col text-center">
      <div class="icon-box">
        <img src="\assets\planner\weekly2.jpg" style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
      </div>
    </div>
    <div class="col text-center">
      <div class="icon-box">
        <img src="\assets\planner\weekly3.jpg" style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
      </div>
    </div>
  </div>

  <div class="container px-4 px-lg-5">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h4 class="text-center mt-5">Planner Bulanan</h4>
        <hr class="divider" />
      </div>
    </div>
  </div>

  <div class="row pt-3 mb-5">
    <div class="col text-center">
      <div class="icon-box">
        <img src="\assets\planner\monthly1.jpg" style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
      </div>
    </div>
    <div class="col text-center">
      <div class="icon-box">
        <img src="\assets\planner\monthly2.jpg" style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
      </div>
    </div>
    <div class="col text-center">
      <div class="icon-box">
        <img src="\assets\planner\monthly3.jpg" style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
      </div>
    </div>
  </div>

</section><!-- End planner Section -->
@endsection