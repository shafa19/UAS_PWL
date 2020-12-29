<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Joining Course</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

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

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
        <br><br>
        <!-- Title -->
        <form action="/student/create" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <label for="nama_siswa">Name</label>
                <input type="text" class="form-control" required="required" name="nama_siswa"></br>
            </div>
            <div class="form-group">
                <label for="jk">Gender</label>
                <input type="text" class="form-control" required="required" name="jk"></br>
            </div>
            <div class="form-group">
                <label for="usia">Age</label>
                <input type="text" class="form-control" required="required" name="usia"></br>
            </div>
            <div class="form-group">
                <label for="alamat">Address</label>
                <input type="text" class="form-control" required="required" name="alamat"></br>
            </div>
            <div class="form-group">
                <label for="email">E-mail Address</label>
                <input type="text" class="form-control" required="required" name="email"></br>
            </div>
            <div class="form-group">
                <label for="no_telp">Phone Number</label>
                <input type="text" class="form-control" required="required" name="no_telp"></br>
            </div>
            <button href="{{ '/course' }}" class="btn btn-primary float-left">Back to Course</button>
            <button type="submit" name="add" class="btn btn-primary float-right">Join Course!</button>
        </form>
        <br><br><br><br><br><br>
  
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        
        <!-- Categories Widget -->
        <br><br>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>