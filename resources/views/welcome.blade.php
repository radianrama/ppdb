<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>PPDB SMK Semangat 45</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/lightbox.css') }}">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>SMK</em> Semangat 45</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a class="nav-link tm-nav-link" href="{{ route('daftar.create') }}">Daftar Sekarang</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="{{ route('login')}}">Login</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Selamat Datang Di PPDB</h6>
              <h2><em>SMK</em> Semangat 45</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="{{ route('daftar.create') }}">Daftar Sekarang</a></div>
              </div>
          </div>
      </div>
  </section>
  @if($message = Session::get('success'))
    <script>
        alert('{{ $message }}')
    </script>
   @endif
  <!-- ***** Main Banner Area End ***** -->


  