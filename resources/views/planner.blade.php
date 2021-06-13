@extends('template/temp')

@section('title', 'Planner | buatPlanner')

@section('container')
<div class="container">
    <p>Pilih template
    <p>Planner Harian
    <p>Planner Mingguan
    <p>Planner Bulanan
</div>
@endsection

<!-- ======= planner Section ======= -->
<section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Pilih Planner</h2>
          <p>Pilih template sertifikat sesuai keinginan mu.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <img src="\assets\planner\Pastel-Daily-Planner.jpg"
              style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <img src="\assets\planner\Perencana-Jadwal-Bulanan-Persegi-Abu-Abu-dan-Krem.jpg"
              style="width:270px;height:370px;box-shadow: 5px 5px 5px #ccc;"></img>
            </div>
          </div>

      </div>
    </section><!-- End planner Section -->