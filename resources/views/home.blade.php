@extends('template/temp')

@section('title', 'Home | buatPlanner')

@section('menu')
<div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav ms-auto my-2 my-lg-0">
    <li class="nav-item"><a class="nav-link" href="#tutorial">Tutorial</a></li>
    <li class="nav-item"><a class="nav-link" href="#contactus">Contact Us</a></li>
  </ul>
</div>
@endsection

@section('container')
<header class="masthead">
  <div class="container px-4 px-lg-5 h-100">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h1 class="text-white font-weight-bold">Simple !</h1>
        <hr class="divider" />
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-white-75 mb-5">Pilih sendiri template yang kamu sukai dengan gaya mu sendiri</p>
        <a class="btn btn-primary btn-xl" href="/kategori">Buat Sekarang</a>
      </div>
    </div>
  </div>
</header>
<section class="page-section" id="tutorial">
  <div class="container px-4 px-lg-5">
    <h2 class="text-center mt-0">Tutorial</h2>
    <hr class="divider" />
    <div class="row gx-4 gx-lg-5">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <div class="mb-2"><img src="https://img.icons8.com/cute-clipart/64/000000/calendar-1.png"/></div>
          <p class="text-muted mb-0">Pilih Jenis Planner Kebutuhan mu.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <div class="mb-2"><img src="https://img.icons8.com/cute-clipart/64/000000/calendar-2.png"/></div>
          <p class="text-muted mb-0">Pilih Template sesuai keinginan mu.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <div class="mb-2"><img src="https://img.icons8.com/cute-clipart/64/000000/calendar-3.png"/></div>
          <p class="text-muted mb-0">Isi rencana mu.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <div class="mb-2"><img src="https://img.icons8.com/cute-clipart/64/000000/calendar-4.png"/></div>
          <p class="text-muted mb-0">Cetak !</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- button get started-->
@endsection