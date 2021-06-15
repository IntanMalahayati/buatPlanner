<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--css here-->
    <!-- Favicons -->
    <!--<link href="assets/img/icondapemas-1.png" rel="icon">
    <link href="assets/img/icondapemas-1.png" rel="apple-touch-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets\css\style.css" rel="stylesheet">
    <link rel="shortcut icon" href="\assets\img\icon.ico?v=<?php echo time(); ?>">

    <title>@yield('title')</title>
</head>
   
<body>
  <nav id="header" class="navbar fixed-top d-flex align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a class="logo navbar-brand text-dark" style="font-family:Sofia" href="/">
      <img src="\assets\img\icon.png" width="28" height="28" class="d-inline-block align-top" alt="">
      buatPlanner
    </a>
    <div class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" data-target="#tutorial" data-toggle="modal" href="#tutorial">Tutorial</a>
      <a class="p-2 text-dark" data-target="#contactUs" data-toggle="modal" href="#contactus">Contact Us</a>
    </div>
  </nav>

  <div class="modal fade" id="tutorial" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Tutorial</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>1. Pilih Jenis Planner Kebutuhan mu
          <br>2. Pilih Template sesuai keinginan mu
          <br>3. Isi rencana mu
          <br>4. Cetak </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="contactUs" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Contact Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <p>Email :
        <p>sri.hr@mhs.unsyiah.ac.id
        <p>intan31@mhs.unsyiah.ac.id
        </div>
      </div>
    </div>
  </div>

    
    @yield('container')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>