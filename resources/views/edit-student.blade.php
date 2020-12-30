<!DOCTYPE html>
<html lang="en">

<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Student</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ '/manage-student' }}">Manage Student</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <!--<li class="nav-item">
            <a class="nav-link" href="{{ '/' }}">Home</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="{{ '/manage-student' }}">Manage</a>
          </li>
          <!--<li class="nav-item dropdown">
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
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8"><br><br>
        <!-- Title -->
        <br><br>
        <form action="/student/update/{{$students->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}} 
            <input type="hidden" name="id" value="{{$students->id}}"></br>
            <div class="form-group">
                <label for="nama_siswa">Name</label>
                <input type="text" class="form-control" required="required" name="nama_siswa" value="{{$students->nama_siswa}}"></br>
            </div>
            <div class="form-group">
                <label for="jk">Gender</label>
                <select type="text" class="form-control" required="required" name="jk" value="{{$students->jk}}">
                <option>Male</option>
                <option>Female</option>
                </select>
                </br>
            </div>
            <div class="form-group">
                <label for="usia">Age</label>
                <input type="text" class="form-control" required="required" name="usia" value="{{$students->usia}}"></br>
            </div>
            <div class="form-group">
                <label for="alamat">Address</label>
                <input type="text" class="form-control" required="required" name="alamat" value="{{$students->alamat}}"></br>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" required="required" name="email" value="{{$students->email}}"></br>
            </div>
            <div class="form-group">
                <label for="no_telp">Phone Number</label>
                <input type="text" class="form-control" required="required" name="no_telp" value="{{$students->no_telp}}"></br>
            </div>
            <div class="form-group">
                <label for="pilihankursus">Choose your course</label>
                <ul class="list-styled mb-0">
                  <li>Conversation Class</li>
                  <li>IELTS Preparation Class</li>
                  <li>Academic Class</li>
                  <li>Private Class</li>
                </ul>
                <input type="text" class="form-control" required="required" name="pilihankursus" value="{{$students->pilihankursus}}"></br>
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right">Edit Student</button>
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