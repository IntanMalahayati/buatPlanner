@extends('template/temp')

@section('title', 'Planner | buatPlanner')

@section('container')
<section class="page-section bg-white">
    <div class="container px-4 px-lg-5">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h2 class="text-center mt-0">Isi Templatemu!</h2>
                <hr class="divider" />
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 mt-5 justify-content-center mb-5">
            <div class="col-lg-6 text-center">
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="track1" type="text" placeholder="Enter your task..."/>
                        <label>Today's Tasklist</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="track2" type="text" placeholder="Enter your task..."/>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="track3" type="text" placeholder="Enter your task..."/>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="track4" type="text" placeholder="Enter your task..."/>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="track5" type="text" placeholder="Enter your task..."/>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="schedule" type="text" style="height: 10rem" placeholder="Enter your schedule..."></textarea>
                        <label>Schedule</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="dontforget" type="text" style="height: 10rem" placeholder="Enter your schedule..."></textarea>
                        <label>Don't Forget</label>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <canvas class="text-center" id="canvas" height="700px" width="520px" ></canvas><br>
                <div class="text-center"><a  class="btn btn-primary btn-xl"href="#" id="download-jpg-btn">Download!</a>&nbsp;&nbsp;</div>
                <script src="/js/planner.js"></script>
            </div>
        </div>
    </div>
</section>
@endsection