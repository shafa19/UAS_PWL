<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Classrooms</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/full-width-pics.css" rel="stylesheet">

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
          <li class="nav-item {{ Route::is('course') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/course') }}">Courses</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('services') ? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('/services') }}">Services</a>
          @endcan
          </li>
          <li class="nav-item active {{ Route::is('classrooms') ? 'active' : '' }}">
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

  @foreach($classrooms as $cl)
  <!-- Image element - set the background image for the header in the line below -->
  <div class="py-5 bg-image-full" style="background-image: url('{{('storage/'.$cl->ruang_pic)}}" class="card-img-top" alt="Card image cap">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </div>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>{{ $cl->nama_ruang }}</h1>
      <p class="lead">This is {{ $cl->nama_ruang }} room</p>
      <p>The capacity is up to {{ $cl->kapasitas }} students inside</p>
    </div>
  </section>
  @endforeach

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