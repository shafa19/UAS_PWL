<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>English Smart Introduction</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/modern-business.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ '/' }}">English Smart</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ '/' }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Classes
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="{{ '/course' }}">Courses</a>
              <a class="dropdown-item" href="{{ '/schedules' }}">Schedules</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Facilities
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="{{ '/services' }}">Services</a>
              <a class="dropdown-item" href="{{ '/classrooms' }}">Classrooms</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="register.html">Register</a>
          </li>   
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1493767862928-5585c72094f1?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Student</h3>
            <p>The students enjoy learning activities</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1504863872862-a26e5582ba80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1091&q=80')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Classroom</h3>
            <p>There are free WiFi, AC and LCD facilities</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80')">
          <div class="carousel-caption d-none d-md-block">
            <h3>TOEFL Test</h3>
            <p>Provides a toefl test</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to English Smart</h1>
      <p>English Smart adalah sebuah lembaga kursus Bahasa Inggris yang berdiri sejak tanggal 1 September 2017 dan berlokasi di Jalan Soekarno Hatta No.9, Malang, Jawa Timur. Lokasi kursus English Smart sangat strategis dan berada dekat dengan kampus-kampus utama di Malang. Program kursus Bahasa Inggris yang ditawarkan oleh English Smart selain dalam bentuk kursus Bahasa Inggris, kami juga melayani bimbingan belajar Bahasa Inggris untuk peserta didik yang membutuhkan bantuan dalam pelajaran Bahasa Inggris di sekolah maupun kursus percakapan Bahasa Inggris bagi Anda yang akan melakukan presentasi dalam Bahasa Inggris, Daily Conversation, Public Speaking dan lain-lain. English Smart juga memiliki program English for Specific Purpose untuk berbagai macam kebutuhan Bahasa Inggris Anda baik dalam hal pendidikan maupun bisnis.</p>
    <br>

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h3>Visi</h3>
        <p>Menjadi Lembaga Pendidikan Kursus Bahasa Inggris yang berstandar pendidikan nasional, bermutu, inovatif, kreatif, mudah dipahami dan menyenangkan dengan lulusan yang mampu bersaing secara global dan mengikuti perkembangan zaman.</p>
        <h3>Misi</h3>
        <p>1. Menyediakan tempat kursus yang berstandar pendidikan nasional.</p>
        <p>2. Mendidik lulusan yang berketrampilan, inovatif, kreatif dan mudah dipahami dibidang Bahasa Inggris didukung dengan wawasan yang luas.</p>
        <p>3. Menciptakan suasana kelas yang kondusif dan menyenangkan serta didukung oleh pengajar yang kompeten dibidangnya.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1570338896564-2340647bbe81?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1052&q=80" alt="">
      </div>
    </div>
    <br>

    <!-- /.row -->
    <div class="row">
      <div class="col-lg-6">
        <h3>Follow us</h3>
        <img style="margin:10px" width="40" height="40" src="{{('img/periscope.png')}}" alt=""> Jl. Soekarno Hatta No. 9 Malang Jawa Timur <br>
          <img style="margin:10px" width="40" height="40" src="{{('img/envelope.png')}}" alt=""> englishsmart@gmail.com <br>
          <img style="margin:10px" width="40" height="40" src="{{('img/facebook.png')}}" alt=""> English Smart<br>
          <img style="margin:10px" width="40" height="40" src="{{('img/instagram.png')}}" alt=""> english.smart <br>
      </div>
    </div>

    <hr>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; English Smart 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>