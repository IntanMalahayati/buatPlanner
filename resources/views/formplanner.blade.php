@extends('template/temp')

@section('title', 'Planner | buatPlanner')

@section('container')
<form>
<label>Today's TrackList<br>
<input id="track1"> <br>
<input id="track2"> <br>
<input id="track3"> <br>
<input id="track4"> <br>
<input id="track5"> <br>
</label>
<br>
<label>My Schedule<br>
<textarea id="schedule"></textarea>
</label>
<br><br>
<label>Dont Forget<br>
<textarea id="dontforget"></textarea></label>
</form>

<canvas id="canvas" height="700px" width="520px" ></canvas><br>
<a href="#" id="download-jpg-btn">Download Planner</a>&nbsp;&nbsp;
<!--<a href="#" id="download-pdf-btn">Downlaod PDF</a>-->
<script src="/js/planner.js"></script>
@endsection