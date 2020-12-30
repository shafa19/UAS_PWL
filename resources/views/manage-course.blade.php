<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manage Course</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div href="{{ '/manage-dashboard' }}"class="sidebar-heading">Manage Dashboard</div>
      <div class="list-group list-group-flush">
        <a href="{{ '/manage-classroom' }}" class="list-group-item list-group-item-action bg-light">Classrooms</a>
        <a href="{{ '/manage-course' }}" class="list-group-item list-group-item-action bg-light">Courses</a>
        <a href="{{ '/manage-schedule' }}" class="list-group-item list-group-item-action bg-light">Schedules</a>
        <a href="{{ '/manage-service' }}" class="list-group-item list-group-item-action bg-light">Services</a>
        <a href="{{ '/manage-student' }}" class="list-group-item list-group-item-action bg-light">Students</a>
        <a href="{{ '/manage-user' }}" class="list-group-item list-group-item-action bg-light">Users</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ '/home' }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="{{ '/manage-dashboard' }}">Manage</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>-->
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
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Manage Course</h1><br>

        <!-- Post Content Column -->
        <div class="col-lg-10"> <br>
            <div class="card">
                <div class="card-header text-center">
                    <h3>All Courses</h3>
                </div>
                <a href="course/add" class="btn btn-primary">Add Course</a>
                <a href="course/print_pdf" class="btn btn-primary" target="_blank">Print PDF</a>
                </br></br>
            </div>
        <!-- Title -->
            <div class="card body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Course</th>
                        <th>Short Desc</th>
                        <th>Long Desc</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->nama_course }}</td>
                        <td>{{ $c->short_desc }}</td>
                        <td>{{ $c->long_desc }}</td>
                        <td>{{ $c->harga }}</td>
                        <td>
                        <img width="150px" src="{{('storage/'.$c->course_pic)}}" class="card-img-top" alt="Card image cap">
                        </td>
                        <td>
                            <a href="course/edit/{{ $c->id }}" class="badge badge-warning">Edit</a>
                            <a href="course/delete/{{ $c->id }}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </br></br>
            </div>
        </div>
      </div>
      
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>