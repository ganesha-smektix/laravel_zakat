<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zakat | SMK Batik Pebaik</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
        </li>

        <!-- Messages Dropdown Menu -->

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{asset('logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMK Batik Perbaik</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{route('home')}}" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('zakat')}}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Data Zakat
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Jumlah pengumpulan zakat</span>
                  <span class="info-box-number">
                    {{$data}}
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-sm-6">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-balance-scale"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Jumlah pengumpulan zakat (kg)</span>
                  <span class="info-box-number">
                    {{$data2}}
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Data Zakat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('submit')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="nama lengkap">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                      <option>--Pilih--</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control">
                      <option>--Pilih--</option>
                      <option value="X TJKT">X TJKT</option>
                      <option value="X PPLG">X PPLG</option>
                      <option value="X PM">X PM</option>
                      <option value="X MPLB 1">X MPLB 1</option>
                      <option value="X MPLB 2">X MPLB 2</option>
                      <option value="X AK 1">X AK 1</option>
                      <option value="X AK 2">X AK 2</option>
                      <option value="XI TKJ">XI TKJ</option>
                      <option value="XI RPL">XI RPL</option>
                      <option value="XI BD">XI BD</option>
                      <option value="XI MP 1">XI MP 1</option>
                      <option value="XI MP 2">XI MP 2</option>
                      <option value="XI AKL 1">XI AKL 1</option>
                      <option value="XI AKL 2">XI AKL 2</option>
                      <option value="XII TKJ">XII TKJ</option>
                      <option value="XII RPL">XII RPL</option>
                      <option value="XII BDP">XII BDP</option>
                      <option value="XII OTKP 1">XII OTKP 1</option>
                      <option value="XII OTKP 2">XII OTKP 2</option>
                      <option value="XII AKL 1">XII AKL 1</option>
                      <option value="XII AKL 2">XII AKL 2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Berat</label>
                    <input type="text" name="berat" class="form-control" id="exampleInputPassword1" value="2.7">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{asset('jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte.min.js')}}"></script>
</body>

</html>