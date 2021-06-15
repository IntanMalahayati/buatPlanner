@extends('template/temp')

@section('title', 'Kategori | buatPlanner')

@section('container')
<div class="container">
  <div class="section-title">
    <br>
      <h2>Mau Buat Apa?</h2>
      <p>Pilih jenis jurnal yang kamu butuh. Edit dan isi jadwal mu.
        <br>Dapatkan kemudahan dalam membuat Jurnal Kegiatan mu</p>
    </div>
  <button><a href="/planner">Planner</a> </button>
  <button><a href="/sertifikat">Sertifikat</a></button>
</div>
@endsection