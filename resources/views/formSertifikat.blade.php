@extends('template/temp')

@section('title', 'Sertifikat | buatPlanner')

@section('container')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="row">
        <div class="col">
            <label> Nama Penerima :
                <input id="name" type="text" placeholder="Nama Penerima">
            </label>
            <br>
            <label> Penghargaann atas :
                <input id="tujuan" type="text" placeholder="Tujuan">
            </label>
            <br>
            <label> Petinggi 1 :
                <input id="petinggi1" type="text" placeholder="Petinggi 1">
            </label>
            <br>
            <label> Status Petinggi 1 :
                <input id="statuspetinggi1" type="text" placeholder="Status Petinggi 1" >
            </label>
            <br>
            <label> Petinggi 2 :
                <input id="petinggi2" type="text" placeholder="Petinggi 2">
            </label>
            <br>
            <label> Status Petinggi 2 :
                <input id="statuspetinggi2" type="text" placeholder="Status Petinggi 2">
            </label>
            <br>
        </div>

        <div class="col">
            <canvas id="canvas" height="350px" width="500px" ></canvas>
            <br>
            <a href="#" id="download-btn">Download Sertifikat</a>
            <script src="/js/sertifikat.js"></script>
        </div>
    </div>
</div>
@endsection