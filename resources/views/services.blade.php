<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fasilities</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
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
          <li class="nav-item {{ Route::is('course') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/course') }}">Courses</a>
          @endcan
          </li>
          <li class="nav-item active {{ Route::is('services') ? 'active' : '' }}">
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
    <h1 class="mt-4 mb-3">Services
      <small>on English Smart</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a>English Smart</a>
      </li>
      <li class="breadcrumb-item active">Services</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        @foreach($services as $s)
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('storage/'.$s->service_pic)}}"alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $s->nama_service }}</h2>
            <p class="card-text">{{ $s->keterangan }}</p>
          </div>
        </div>
        @endforeach

      
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

       
        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">English Smart</h5>
          <div class="card-body">
            Your best choice for learning English!
          </div>
        </div>

      </div>

    </div>
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