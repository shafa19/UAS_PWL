<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Course</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

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
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Classes
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item active" href="{{ '/course' }}">Courses</a>
              <a class="dropdown-item" href="{{ '/schedules' }}">Schedules</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Facilities
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
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

  <!-- Page Content -->
  <div class="container">
    <br><br><br>
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">{{ $courses->nama_course }}
      <small>Programs</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a>Course</a>
      </li>
      <li class="breadcrumb-item active">{{ $courses->nama_course }}</li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="{{ $courses->course_pic }}" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">{{ $courses->nama_course }}</h3>
        <p>{{ $courses->long_desc }}</p>
        <h3 class="my-3">Price</h3>
        <p>only {{ $courses->harga }} IDR</p>
        <br><br>
        <a href="{{ '/course' }}" class="btn btn-primary">All Courses &rarr;</a>
      </div>

    </div>
    <br><br>
    <!-- /.row -->

    
    <!-- /.row -->

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
