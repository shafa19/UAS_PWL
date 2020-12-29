<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manage Student</title>

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
              <a class="nav-link" href="{{ '/' }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
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
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Manage Student</h1><br>

        <!-- Post Content Column -->
        <div class="col-lg-8"> <br>
            <div class="card">
                <div class="card-header text-center">
                    <h3>All Students</h3>
                </div>
                <a href="student/print_pdf" class="btn btn-primary" target="_blank">Print PDF</a>
                </br></br>
            </div>
        <!-- Title -->
            <div class="card body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Telp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $st)
                    <tr>
                        <td>{{ $st->id }}</td>
                        <td>{{ $st->nama_siswa }}</td>
                        <td>{{ $st->jk }}</td>
                        <td>{{ $st->usia }}</td>
                        <td>{{ $st->alamat }}</td>
                        <td>{{ $st->email }}</td>
                        <td>{{ $st->no_telp }}</td>
                        <td>
                            <a href="student/edit/{{ $st->id }}" class="badge badge-warning">Edit</a>
                            <a href="student/delete/{{ $st->id }}" class="badge badge-danger">Delete</a>
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