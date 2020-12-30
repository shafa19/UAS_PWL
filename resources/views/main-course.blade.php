<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>English Smart's Courses</title>

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
          <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
          @endcan
          </li>
          <li class="nav-item active {{ Route::is('course') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/course') }}">Courses</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('services') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/services') }}">Services</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('classrooms') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/classrooms') }}">Classroom</a>
          @endcan
          </li>   
          <li class="nav-item {{ Route::is('pendaftaran') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/pendaftaran') }}">Registration</a>
          </li>  
          @endcan
          <li class="nav-item {{ Route::is('manage-dashboard') ? 'active' : '' }}">
          @can('manage-articles')
            <a class="nav-link" href="{{ url('/manage-dashboard') }}">Manage</a>
          @endcan
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Courses
      <small>on English Smart</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a>English Smart</a>
      </li>
      <li class="breadcrumb-item active">Courses Page</li>
    </ol>

    <!-- Blog Post -->
    @foreach($courses as $c)
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a>
            <img class="img-fluid" src="{{('storage/'.$c->course_pic)}}" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">{{ $c->nama_course }}</h2>
            <p class="card-text">{{ $c->short_desc }}</p>
            <a href="{{ '/course/'.$c->id }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    
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