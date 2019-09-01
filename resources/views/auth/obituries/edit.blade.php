<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Williams Funeral Home</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->


    <!-- Navbar -->

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="crud.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Add Obituaries</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-user"></i><span> Logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">


        <h1 style="text-align:center;margin-bottom:30px;">Edit Obituaries</h1>


         <form>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault01">First name</label>
              <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationDefault02">Last name</label>
              <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefaultUsername">Death Date</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">#</span>
                </div>
                <input type="date" class="form-control" id="validationDefaultUsername" placeholder="Date" aria-describedby="inputGroupPrepend2" required>
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="validationDefault01">Age</label>
              <input type="number" class="form-control" id="validationDefault01" placeholder="Age" value="Mark" required>
            </div>

          </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault03">City</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault04">State</label>
              <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault05">Zip</label>
              <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
            </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Add Condolences</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

              <div class="form-group">
                <label for="exampleFormControlFile1">Upload Picture</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
            </form>

      </div>


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../../js/demo/datatables-demo.js"></script>

</body>

</html>
