@extends('template/temp')

@section('title', 'Sertifikat | buatPlanner')

@section('container')
<label> Nama Penerima :
    <input id="name" type="text" placeholder="nama">
</label>
<br>
<label> Penghargaann atas :
<input id="tujuan" type="text" placeholder="tujuan">
</label>
<br>
<label> Petinggi 1 :
<input id="petinggi1" type="text" placeholder="petinggi1">
</label>
<br>
<label> Status Petinggi 1 :
<input id="statuspetinggi1" type="text" placeholder="statuspetinggi1" >
</label>
<br>
<label> Petinggi 2 :
<input id="petinggi2" type="text" placeholder="petinggi2">
</label>
<br>
<label> Status Petinggi 2 :
<input id="statuspetinggi2" type="text" placeholder="statuspetinggi2">
</label>
<br>

<canvas id="canvas" height="350px" width="500px" ></canvas>
<br>
<a href="#" id="download-btn">Downlaod Sertifikat</a>
<script src="/js/sertifikat.js"></script>
@endsection