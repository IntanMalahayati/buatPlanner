@extends('template/temp')

@section('title', 'Kategori | buatPlanner')

@section('container')
<section class="page-section bg-white text-dark">
  <div class="container px-4 px-lg-5">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h2 class="text-center mt-0">Mau Buat Apa?</h2>
        <hr class="divider" />
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-muted mb-0">Pilih jenis jurnal yang kamu butuh. Edit dan isi jadwal mu.
        <br>Dapatkan kemudahan dalam membuat jurnal Kegiatan mu.</p>
      </div>
    </div>
  </div>
  <div class="row pt-5">
    <div class="col text-center">
      <div class="mt-5">
        <a href="/planner">
          <div class="mb-2"><img src="https://img.icons8.com/dusk/64/000000/bulleted-list.png" height="60"/></div>
          <h3 class="text-muted h4 mb-2">Planner</h3>
        </a>
      </div>
    </div>
    <div class="col text-center">
      <div class="mt-5">
        <a href="/sertifikat">
          <div class="mb-2"><img src="https://img.icons8.com/color/48/000000/certification.png" height="60"/></div>
          <h3 class="text-muted h4 mb-2">Sertifikat</h3>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- <div class="container">
  <div class="section-title">
    <br>
      <h2>Mau Buat Apa?</h2>
      <p>Pilih jenis jurnal yang kamu butuh. Edit dan isi jadwal mu.
        <br>Dapatkan kemudahan dalam membuat Jurnal Kegiatan mu</p>
    </div>
  <button><a href="/planner">Planner</a> </button>
  <button><a href="/sertifikat">Sertifikat</a></button>
</div> -->
@endsection